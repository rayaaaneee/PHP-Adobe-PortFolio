<?php

namespace App\Controller;

use App\Entity\ArticleInList;
use App\Repository\ArticleInListRepository;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ArticleInListFormType;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Repository\ShoppingListRepository;
use App\Form\ArticleType;
use App\Repository\TypeRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Form\FormInterface;
use Knp\Component\Pager\PaginatorInterface;
use App\Repository\CollaborationRequestRepository;


#[Route('/article')]
class ArticleController extends BaseController
{
    #[Route('/', name: 'article', methods: ['GET', 'POST'])]
    public function index(ArticleRepository $articleRepository, TypeRepository $typeRepository, Request $request, PaginatorInterface $paginator, Session $session, CollaborationRequestRepository $collaborationRequestRepository): Response
    {
        $this->setNbCollabRequestsInSession($session, $collaborationRequestRepository);

        $this->verifyConnection($session);

        $types = $typeRepository->findAll();
        $formSearch = $this->createAndVerifyFormSearch($articleRepository, $types, $request, $paginator);

        $pagination = $formSearch["pagination"];
        $isSearch = $formSearch["isSearch"];
        $formSearch = $formSearch["formSearch"];

        $title = "";
        if ($isSearch) {
            $search = $formSearch->getData()["search"];
            $type = $formSearch->getData()["type"];

            $plural = "";
            if ($pagination->getTotalItemCount() > 1) $plural = "s";
            $title .= $pagination->getTotalItemCount() . " item" . $plural . " found";
            if ($search) {
                $title .= " - \"" . $search . "\"";
            }
            if ($type) {
                $title .= " - " . $typeRepository->find($type)->getName() . "";
            }
        } else {
            $title .= "Items (" . $pagination->getTotalItemCount() . ")";
        }


        $classesTable = ['table-active', ''];
        $classesButtons = ['btn-light', 'btn-primary'];
        return $this->render('article/article.html.twig', [
            'controller_name' => 'ArticleController',
            'classesTable' => $classesTable,
            'classesButtons' => $classesButtons,
            'i' => 0,
            'formSearch' => $formSearch->createView(),
            'pagination' => $pagination,
            'title' => $title
        ]);
    }

    // On precise que l'id est un parametre de la route et forcement un entier
    #[Route('/{id}', name: 'article_show', requirements: ['id' => '\d+'])]
    public function article(string $id, ArticleRepository $articleRepository, ShoppingListRepository $shoppingListRepository, ArticleInListRepository $articleInListRepository, TypeRepository $typeRepository, Session $session, Request $request, PaginatorInterface $paginator, UserRepository $userRepository, CollaborationRequestRepository $collaborationRequestRepository): Response
    {
        $this->setNbCollabRequestsInSession($session, $collaborationRequestRepository);

        $this->verifyConnection($session);

        if (!$session->get('user')) {
            return $this->redirectToRoute('connect');
        }

        $types = $typeRepository->findAll();
        if ($request->isMethod('POST')) {
            $articleInListInputBag = $request->request;
            $articleInListParameters = $articleInListInputBag->all();
            $request = $articleInListParameters["article_in_list_form"];
            $same = false;

            $article = $articleRepository->find($id);
            $brand = null;
            if ($request["brand"] != "") {
                $brand = $request["brand"];
            }
            $totalPrice = $request["quantity"] * $request["unityPrice"];
            $shoppingList = $shoppingListRepository->find($request["shoppingList"]);

            foreach ($shoppingList->getArticles() as $art) {
                if ($art->getName() == $request['name'] && $art->getUnityPrice() == $request['unityPrice'] && $art->getBrand() == $request['brand'] && $art->getArticle() == $article) {
                    $same = true;
                }
            }

            if ($same) {
                foreach ($shoppingList->getArticles() as $art) {
                    //ajoute dans temp dans le tableau 

                    if ($art->getName() == $request['name'] && $art->getUnityPrice() == $request['unityPrice'] && $art->getBrand() == $request['brand'] && $art->getArticle() == $article) {
                        $art->setQuantity($art->getQuantity() + $request['quantity']);
                        $art->setTotalPrice($art->getTotalPrice() + $totalPrice);
                    }
                }

                $articleInListRepository->save($art, true);

                $totalArticles = $request['quantity'] + $shoppingList->getNbArticles();
                $shoppingList->setNbArticles($totalArticles);

                $totalPrice = $totalPrice + $shoppingList->getTotalPrice();
                $shoppingList->setTotalPrice($totalPrice);

                $shoppingListRepository->save($shoppingList, true);
            } else {

                $articleInList = new ArticleInList();
                $articleInList
                    ->setName($request["name"])
                    ->setQuantity($request["quantity"])
                    ->setUnityPrice($request["unityPrice"])
                    ->setShoppingList($shoppingList)
                    ->setTotalPrice($totalPrice)
                    ->setBrand($brand)
                    ->setArticle($article);




                $articleInListRepository->save($articleInList, true);

                $totalArticles = $articleInList->getQuantity() + $shoppingList->getNbArticles();
                $shoppingList->setNbArticles($totalArticles);

                $totalPrice = $articleInList->getTotalPrice() + $shoppingList->getTotalPrice();
                $shoppingList->setTotalPrice($totalPrice);

                $shoppingListRepository->save($shoppingList, true);
            }

            return $this->redirectToRoute('list_show', [
                'id' => $request["shoppingList"],
                'add' => true
            ]);
            exit;
        } else {
            $formSearch = $this->createAndVerifyFormSearch($articleRepository, $types, $request, $paginator)["formSearch"];

            $user = $userRepository->find($session->get('user')->getId());
            $shoppingLists = $user->getAllShoppingLists();

            $article = $articleRepository->find($id);

            $articleInList = new ArticleInList();
            $articleInList
                ->setName($article->getName())
                ->setQuantity(1)
                ->setUnityPrice($article->getUnityPrice());

            $articleInListForm = $this->createForm(ArticleInListFormType::class, $articleInList, [
                'action' => $this->generateUrl('article_show', ['id' => $id]),
                'method' => 'POST',
                'attr' => ['class' => 'form-inline'],
                'shopping_lists' => $shoppingLists
            ]);

            return $this->render('article/article.show.html.twig', [
                'controller_name' => 'ArticleController',
                'article' => $article,
                'articleInListForm' => $articleInListForm->createView(),
                'formSearch' => $formSearch->createView()
            ]);
        }
    }

    private function createAndVerifyFormSearch(ArticleRepository $articleRepository, array $types, Request $request, PaginatorInterface $paginator): FormInterface | array
    {
        $formSearch = $this->createForm(ArticleType::class, null, [
            'types' => $types
        ]);

        $isSearch = false;
        $pagination = null;
        $formSearch->handleRequest($request);


        if ($formSearch->isSubmitted() && $formSearch->isValid()) {
            $data = $formSearch->getData();

            if ($data['type'] == null && $data['search'] == null) {
                $url = $this->generateUrl('article');
                Header("Location: $url");
                exit;
            }
            $isSearch = true;

            $requestPage = $request->query->getInt('p', 1);
            $pagination = $paginator->paginate(
                $articleRepository->findByNameAndTypeQuery($data),
                $requestPage < 1 ? 1 : $requestPage,
                10
            );
        } else {
            $requestPage = $request->query->getInt('p', 1);
            $pagination = $paginator->paginate(
                $articleRepository->findAllQuery(),
                $requestPage < 1 ? 1 : $requestPage,
                10
            );
        }
        return [
            "formSearch" => $formSearch,
            "isSearch" => $isSearch,
            "pagination" => $pagination
        ];
    }
}

<?php

/**
 * @var $_SESSION array{user: User, cart: Cart}
 */

// Insérer le commentaire
if (isset($_POST['sendcomment']) && isset($_POST['eventid']) && !isset($_POST['sendReply'])) {
    $commentDAO = new CommentDAO();
    $lastId = $commentDAO->getLastId();


    $comment = new Comment($lastId + 1, $_POST['eventid'], $_SESSION['user']->getId(), $_POST['sendcomment'], 0, 0);
    $commentDTO = new CommentDTO();
    $commentDTO->add($comment);
}

// Liker ou disliker un commentaire
if (isset($_POST['idComment']) && isset($_POST['like-comment'])) {
    $commentDAO = new CommentDAO();
    $comment = $commentDAO->getById($_POST['idComment']);

    $commentDTO = new CommentDTO();

    $idComment = $_POST['idComment'];
    if ($_POST['like-comment'] == "like") {
        $commentDTO->like($idComment);
    } else {
        $commentDTO->dislike($idComment);
    }
}

// Ajouter une réponse 
if (isset($_POST['sendReply']) && isset($_POST['eventid']) && isset($_POST['commentId'])) {
    $answerDAO = new AnswerDAO();
    $lastId = $answerDAO->getLastId();

    $answer = new Answer($lastId + 1, intval($_POST['sendcomment']), $_SESSION['user']->getId(), intval($_GET['event']), $_POST['sendcomment'], 0, 0);
    $answerDTO = new AnswerDTO();
    $answerDTO->add($answer);
}

$commentPresenter = new CommentPresenter($_GET["event"]);
$displayer = $commentPresenter->formatDisplay();

if (!isset($_GET['event']) || $_GET['event'] == "") {
    require_once PATH_VIEWS . "404.php";
} else {

    $presenter = new EventPresenter($_GET, $_POST);
    $display = $presenter->formatDisplay();
    $posted = false;

    if (isset($_POST['type']) && isset($_POST['quantity'])) {
        if (isset($_SESSION['user'])) {
            $quantity = $_POST['quantity'];
            if ($quantity == 1)
                $textToDisplay = "Votre ticket a bien été ajouté au panier.";
            else
                $textToDisplay = "Vos tickets ont bien été ajoutés au panier.";

            $posted = true;
            $ticketAddedToCart = $presenter->formatDisplayById($_GET['event'], $_POST['type'], $_POST['quantity']);

            /* Si l'utilisteur avait déjà ce ticket dans son panier, on supprime l'ancien et on ajoute au nouveau la quantité
            de l'ancien */

            $ticketPricingDAO = new TicketPricingDAO();

            $pricing = $ticketPricingDAO->getById($_POST['type']);

            $keyAlreadyExist = $_SESSION['cart']->add($pricing->getIdTicketPricing(), $quantity);

            $cartDTO = new CartDTO();
            if ($keyAlreadyExist) {
                $cartDTO->update($_SESSION['user'], $pricing, $quantity);
            } else {
                $cartDTO->add($_SESSION['user'], $pricing, $quantity);
            }
        }
    }
    require_once PATH_VIEWS . "event.php";
}

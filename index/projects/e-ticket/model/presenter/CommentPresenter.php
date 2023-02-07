<?php

class CommentPresenter extends Presenter
{
    private CommentDAO $commentdao;
    private UserDAO $userdao;
    private AnswerDAO $answerdao;
    private int $eventId;

    public function __construct($eventId)
    {
        $this->commentdao = new CommentDAO();
        $this->userdao = new UserDAO();
        $this->answerdao = new AnswerDAO();
        $this->eventId = $eventId;
    }

    public function checkProcess(): void
    {
        return;
    }

    public function formatDisplay(): array
    {

        $display = [];
        $display['comment'] = '';

        $comments = $this->commentdao->getByEventId($this->eventId);
        $display['nbComments'] = count($comments);

        if (empty($comments)) {
            $display['comment'] .= '<p class="no-comment">Aucun commentaire pour le moment</p>';
        } else {

            $nbComment = 0;
            foreach ($comments as $comment) {

                $answers = $this->answerdao->getByCommentId($comment["ID_COMMENT"]);
                $user = $this->userdao->getUserById($comment["ID_USER"]);

                $display['comment'] .= '"<div class="comment">';
                $display['comment'] .= '<div class="colored-comment-part">';
                $display['comment'] .= '<a href="?page=profile&user=' . $comment["ID_USER"] . '" class="comment-author">';
                $display['comment'] .= '<img src="' . $user->getProfilePicture()->getPicturePath() . '" alt="avatar">';
                $display['comment'] .= '<p>' . $user->getFirstName() . '</p>';
                '</p>';
                $display['comment'] .= '</a>';
                $display['comment'] .= '<div class="comment-content-date">';
                $date = new DateTime($comment["DATE"]);
                $time = new DateTime($comment["TIME"]);
                $display['comment'] .= '<p class="comment-date">Le ' . $date->format('d/m/Y') . ' à ' . $time->format('H:i') . '</p>';
                $display['comment'] .= '<p class="comment-content">' . $comment["CONTENT"] . '</p>';
                $display['comment'] .= '<p class="comment-read-more" id="crm' . $nbComment . '" onclick="showAllComment(this)">Voir plus</p>';
                $display['comment'] .= '</div>';
                $display['comment'] .= '<div class="like-comment-container">';

                if (isset($_SESSION["user"])) {
                    $display['comment'] .= '<form action="./?page=event&event=' . $this->eventId . '" method="post" class="like-form">';
                    $display['comment'] .= '<input type="hidden" name="idComment" value="' . $comment["ID_COMMENT"]  . '">';
                    $display['comment'] .= '<input type="hidden" name="like-comment" value="like">';
                    $display['comment'] .= '<p>' . $comment["NUMBER_LIKES"] . '</p>';
                    $display['comment'] .= '<button type="submit"><img src="' . PATH_IMAGES . 'useful/likeblack.png" alt="like" class="like-btn-img"></button>';
                    $display['comment'] .= '</form>';
                    $display['comment'] .= '<form action="./?page=event&event=' . $this->eventId . '" method="post" class="like-form">';
                    $display['comment'] .= '<input type="hidden" name="idComment" value="' . $comment["ID_COMMENT"]  . '">';
                    $display['comment'] .= '<input type="hidden" value="dislike">';
                    $display['comment'] .= '<p>' . $comment["NUMBER_DISLIKES"] . '</p>';
                    $display['comment'] .= '<button type="submit"><img src="' . PATH_IMAGES . 'useful/likered.png" alt="dislike" class="like-btn-img"></button>';
                    $display['comment'] .= '</form>';
                }

                $display['comment'] .= '</div>';
                $display['comment'] .= '</div>';
                $display['comment'] .= '<div class="see-more-answers-and-reply-container">';
                if (count($answers) > 0) {
                    $display['comment'] .= '<div class="comment-answers" onclick="showReplies(this);">';
                    $display['comment'] .= '<div>';
                    $display['comment'] .= '<p>Voir</p>';
                    $display['comment'] .= '<p>les</p>';
                    $display['comment'] .= '<p>' . count($answers) . '</p>';
                    $display['comment'] .= '<p>réponse</p>';
                    $display['comment'] .= '</div>';
                    $display['comment'] .= '<p class="invert-text">></p>';
                    $display['comment'] .= '</div>';
                } else {
                    $display['comment'] .= '<div class="comment-answers">';
                    $display['comment'] .= '<div>';
                    $display['comment'] .= '<p>Aucune</p>';
                    $display['comment'] .= '<p>réponse</p>';
                    $display['comment'] .= '</div>';
                    $display['comment'] .= '</div>';
                }
                if (isset($_SESSION["user"])) {
                    $display['comment'] .= '<div class="to-reply" onclick="showTextArea(this, ' . $comment["ID_COMMENT"] . ')">';
                    $display['comment'] .= '<p>Répondre</p>';
                    $display['comment'] .= '<p>></p>';
                    $display['comment'] .= '</div>';
                }
                $display['comment'] .= '</div>';
                $display['comment'] .= '<div class="comment-answers-visible" style="display:none">';

                $displayAnswers = $this->formatDisplayAnswers($answers, $nbComment);
                $display['comment'] .= $displayAnswers;

                $display['comment'] .= '</div>';
                $display['comment'] .= '</div>';
                $display['comment'] .= '</div>';
                $display['comment'] .= '</div>';

                $nbComment++;
            }
        }

        return $display;
    }

    public function formatDisplayAnswers($answers, $nbComment): string
    {
        $display = "";
        $nbAnswer = 0;
        foreach ($answers as $answer) {

            $display .= '<div class="reply">';
            $display .= '<a href="?page=profile&user=' . $answer['ID_USER'] . '" class="reply-author comment-author">';
            $display .= '<img src=' . $this->userdao->getUserById($answer["ID_USER"])->getProfilePicturePath() . ' alt="avatar">';
            $display .= '<p>' . $this->userdao->getUserById($answer["ID_USER"])->getFirstName() . '</p>';
            $display .= '</a>';
            $display .= '<div class="reply-content-date comment-content-date">';
            $display .= '<p class="reply-date">Le 01/01/2021 à 00:00</p>';
            $display .= '<p class="reply-content">' . $answer["CONTENT"] . '</p>';
            $display .= '<p class="reply-read-more" id="rrm' . $nbAnswer . '" onclick="showAllReply(this, ' . $nbComment . ')">Voir plus</p>';
            $display .= '</div>';
            $display .= '<div class="like-reply-container">';
            $display .= '<form action="./?page=event&event=' . $this->eventId . '" method="post" class="reply-like-form like-form">';
            $display .= '<input type="hidden" value="like">';
            $display .= '<p>' . $answer['NUMBER_LIKES'] . '</p>';
            $display .= '<button type="submit">';
            $display .= '<img src="' . PATH_IMAGES . 'useful/likeblack.png" alt="like" class="reply-like-btn-img">';
            $display .= '</button>';
            $display .= '</form>';
            $display .= '<form action="./?page=event&event=' . $this->eventId . '" method="post" class="reply-like-form like-form">';
            $display .= '<input type="hidden" value="dislike">';
            $display .= '<p>' . $answer['NUMBER_DISLIKES'] . '</p>';
            $display .= '<button type="submit">';
            $display .= '<img src="' . PATH_IMAGES . 'useful/likered.png" alt="dislike" class="reply-like-btn-img">';
            $display .= '</button>';
            $display .= '</form>';
            $display .= '</div>';
            $display .= '</div>';
            $nbAnswer++;
        }
        return $display;
    }
}

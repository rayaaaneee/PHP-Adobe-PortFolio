<?php

class Answer
{
    private int $id;
    private int $idComment;
    private int $idAuthor;
    private int $idEvent;
    private string $answerContent;
    private DateTime $answerDate;
    private $nbLikes;
    private $nbDislikes;

    public function __construct($id, $idComment, $idAuthor, $idEvent, $answerContent, $nbLikes, $nbDislikes)
    {
        $this->id = $id;
        $this->idComment = $idComment;
        $this->idAuthor = $idAuthor;
        $this->idEvent = $idEvent;
        $this->answerContent = $answerContent;
        $this->answerDate = new DateTime("now");
        $this->answerDate = $this->answerDate->setTimezone(new DateTimeZone('Europe/Paris'));
        $this->nbLikes = $nbLikes;
        $this->nbDislikes = $nbDislikes;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthorId()
    {
        return $this->idAuthor;
    }

    public function getEventId()
    {
        return $this->idComment;
    }

    public function getCommentId()
    {
        return $this->idEvent;
    }

    public function getContent()
    {
        return $this->answerContent;
    }

    public function getDate()
    {
        return $this->answerDate;
    }

    public function getNbLikes()
    {
        return $this->nbLikes;
    }

    public function getNbDislikes()
    {
        return $this->nbDislikes;
    }
}

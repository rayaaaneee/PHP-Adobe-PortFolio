<?php

class Comment
{
    private int $id;
    private int $eventid;
    private int $authorid;
    private string $commentContent;
    private DateTime $commentDate;
    private int $nbLikes;
    private int $nbDislikes;

    public function __construct($id, $eventid, $authorid, $commentContent, $nbLikes, $nbDislikes)
    {
        $this->id = $id;
        $this->eventid = $eventid;
        $this->authorid = $authorid;
        $this->commentContent = htmlspecialchars($commentContent);
        $this->commentDate = new DateTime("now");
        $this->commentDate = $this->commentDate->setTimezone(new DateTimeZone('Europe/Paris'));
        $this->nbLikes = $nbLikes;
        $this->nbDislikes = $nbDislikes;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthorId()
    {
        return $this->authorid;
    }

    public function getEventId()
    {
        return $this->eventid;
    }

    public function getContent()
    {
        return $this->commentContent;
    }

    public function getDate()
    {
        return $this->commentDate;
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

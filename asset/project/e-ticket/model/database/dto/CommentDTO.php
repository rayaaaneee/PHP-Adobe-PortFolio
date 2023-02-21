<?php

class CommentDTO extends DTO
{
    public $id;
    public $content;
    public $date;
    public $user;
    public $post;

    public function add($object)
    {
        $fields = [
            "ID_COMMENT",
            "ID_EVENT",
            "ID_USER",
            "CONTENT",
            "DATE",
            "TIME",
            "NUMBER_LIKES",
            "NUMBER_DISLIKES"
        ];

        $values = [
            $object->getId(),
            $object->getEventId(),
            $object->getAuthorId(),
            $object->getContent(),
            $object->getDate()->format("Y-m-d"),
            $object->getDate()->format("H:i:s"),
            $object->getNbLikes(),
            $object->getNbDislikes()
        ];

        $this->insertQuery("comment", $fields, $values);
    }

    public function update($object)
    {
        $this->_sendQuery(
            "UPDATE COMMENT SET CONTENT = ?, DATE = ?, ID_USER = ?, ID_POST = ? WHERE ID_COMMENT = ?",
            [
                $object->getContent(),
                $object->getDate()->format("Y-m-d"),
                $object->getUser()->getId(),
                $object->getPost()->getId(),
                $object->getId(),
                $object->getNbLikes(),
                $object->getNbDislikes()
            ]
        );
    }

    public function delete($object)
    {
        $this->deleteQuery("COMMENT", "ID_COMMENT", $object->getId());
    }

    public function like($idComment)
    {
        $this->_sendQuery("UPDATE COMMENT SET NUMBER_LIKES = NUMBER_LIKES+1 WHERE ID_COMMENT = ?", [$idComment]);
    }

    public function dislike($idComment)
    {
        $this->_sendQuery("UPDATE COMMENT SET NUMBER_DISLIKES = NUMBER_DISLIKES+1 WHERE ID_COMMENT = ?", [$idComment]);
    }
}

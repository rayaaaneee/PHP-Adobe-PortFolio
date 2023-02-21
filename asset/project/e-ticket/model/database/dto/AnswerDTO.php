<?php

class AnswerDTO extends DTO
{
    public $id;
    public $content;
    public $date;
    public $user;
    public $post;

    public function add($object)
    {
        $fields = [
            "ID_ANSWER",
            "ID_COMMENT",
            "ID_USER",
            "ID_EVENT",
            "CONTENT",
            "DATE",
            "TIME",
            "NUMBER_LIKES",
            "NUMBER_DISLIKES"
        ];

        $values = [
            $object->getId(),
            $object->getCommentId(),
            $object->getAuthorId(),
            $object->getEventId(),
            $object->getContent(),
            $object->getDate()->format("Y-m-d"),
            $object->getDate()->format("H:i:s"),
            $object->getNbLikes(),
            $object->getNbDislikes()
        ];

        $this->insertQuery("answer", $fields, $values);
    }

    public function update($object)
    {
        $this->_sendQuery(
            "UPDATE ANSWER SET CONTENT = ?, DATE = ?, ID_USER = ?, ID_POST = ? WHERE ID_COMMENT = ?",
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
        $this->deleteQuery("answer", "ID_ANSWER", $object->getId());
    }
}

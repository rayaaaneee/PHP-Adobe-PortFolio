<?php

class AnswerDAO extends DAO implements IObjectDAO
{
    private string $baseQuery = "SELECT * FROM answer";

    public function getById(int $id): array
    {
        $query = $this->baseQuery . " WHERE id = :id";
        $comment = $this->sendTextQuery($query);
        return $comment;
    }

    public function getByCommentId(int $id): array
    {
        $query = $this->baseQuery . " WHERE ID_COMMENT = :id";
        $comments = $this->queryAll($query, [':id' => $id]);
        return $comments;
    }

    public function getAll(): array
    {
        $query = $this->baseQuery;
        $result = $this->sendTextQuery($query);
        return $result;
    }

    public function getLastId(): int
    {
        $result = $this->getTableLastId('comment', 'ID_COMMENT');
        return $result;
    }
}

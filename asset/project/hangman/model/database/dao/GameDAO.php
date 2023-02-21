<?php
class GameDAO
{
    private $db;
    private $limit = 7;

    public function __construct()
    {
        $this->db = Connection::getInstance()->getPDO();
    }

    public function getLastId()
    {
        $sql = "SELECT MAX(id) FROM game";

        $res = null;
        $res = $this->db->prepare($sql)->fetch();

        // Si la requête ne retourne rien, on retourne 0
        if ($res === false) {
            return 0;
        } else {
            return $res + 1;
        }
    }

    public function getLastGames()
    {
        $sql = "SELECT * FROM game ORDER BY id DESC LIMIT " . $this->limit;

        $res = $this->db->query($sql)->fetchAll();

        // Si la requête ne retourne rien, on retourne null
        if ($res === false) {
            return null;
        } else {
            return $res;
        }
    }

    public function getGamesCount()
    {
        $sql = "SELECT COUNT(*) FROM game";

        $res = $this->db->query($sql)->fetch();

        // Si la requête ne retourne rien, on retourne 0
        if ($res === false) {
            return 0;
        } else {
            // On transform le résultat en entier
            return $res['COUNT(*)'];
        }
    }
}

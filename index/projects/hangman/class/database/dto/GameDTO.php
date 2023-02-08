<?php
require_once PATH_DAO . '/GameDAO.php';
class GameDTO
{
    private $db;
    private GameDAO $gameDAO;

    public function __construct()
    {
        $this->db = Connection::getInstance()->getPDO();
        $this->gameDAO = new GameDAO();
    }

    public function insert($object)
    {
        $req = $this->db->prepare("INSERT INTO game (id, player1, player2, word, winner, errors) VALUES (:id, :player1, :player2, :word, :winner, :errors)");

        $id = $this->gameDAO->getLastId();

        $req->execute(array(
            'id' => $id,
            'player1' => $object->getPseudo1(),
            'player2' => $object->getPseudo2(),
            'word' => $object->getWord(),
            'winner' => $object->getWinnerName(),
            'errors' => $object->getErrors()
        ));
    }
}

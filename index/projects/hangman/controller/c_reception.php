<?php

session_destroy();

require_once PATH_DAO . 'GameDAO.php';


$dao = new GameDAO();
$nbGames = $dao->getGamesCount();
$games = $dao->getLastGames();

require_once PATH_VIEWS . 'header.php';

require_once PATH_VIEWS . 'reception.php';

require_once PATH_VIEWS . 'footer.php';

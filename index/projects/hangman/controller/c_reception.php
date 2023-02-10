<?php

session_destroy();

require_once PATH_DAO . 'GameDAO.php';


$dao = new GameDAO();
$nbGames = $dao->getGamesCount();
$games = $dao->getLastGames();

$errorText = "";
$hasErrors = true;
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if ($error === "word") {
        $errorText = "Please enter a valid word.";
    } else if ($error === "length") {
        $errorText = "Please enter a word between 3 and 20 characters !";
    } else if ($error === "pseudo") {
        $errorText = "Please enter pseudos without special characters (only letters, numbers, accents, dashes and spaces are allowed).";
    } else if ($error === "same") {
        $errorText = "Please enter two different pseudos !";
    } else {
        $hasErrors = false;
    }
} else {
    $hasErrors = false;
}

require_once PATH_VIEWS . 'header.php';

require_once PATH_VIEWS . 'reception.php';

require_once PATH_VIEWS . 'footer.php';

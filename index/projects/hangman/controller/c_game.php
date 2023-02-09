<?php
require_once PATH_DAO . 'GameDAO.php';
require_once PATH_DTO . 'GameDTO.php';

$gameDTO = new GameDTO();
$game = unserialize($_SESSION['game']);
$errorSendLetter = false;
$letter = null;

if (isset($_POST['word'])) {

    $word = $_POST['word'];
    $_SESSION['word'] = $word;

    $game->setWord($word);

    $hasErrorChars = $game->verifyWord();
    $hasErrorLength = $game->verifyWordLength();

    if ($hasErrorChars) {
        header('Location: ./?error=word');
    } else if ($hasErrorLength) {
        header('Location: ./?error=length');
    }
} else if (isset($_POST['letter'])) {

    $letter = $_POST['letter'];
    $game->setAllLetters();
    $errorSendLetter = $game->tryLetter($letter);
} else {
    header('Location: ./');
}

$game->saveInSession();

if ($game->isFinished()) {
    // Envoyer en POST le gagnant de la partie
    $game->setWinnerName();
    $game->saveInSession();

    $gameDTO->insert($game);

    header('Location: ./?page=win');
}

require_once PATH_VIEWS . 'header.php';

require_once PATH_VIEWS . 'game.php';

require_once PATH_VIEWS . 'footer.php';

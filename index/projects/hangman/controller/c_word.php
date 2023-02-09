<?php

require_once PATH_DAO . '/GameDAO.php';
// Si toutes les informations sont présentes dans l'URL alors on peut lancer la partie
if (isset($_POST['pseudo-player-one']) && isset($_POST['pseudo-player-two'])) {
    // On récupère les pseudos des joueurs
    $pseudoPlayerOne = htmlspecialchars($_POST['pseudo-player-one']);
    $pseudoPlayerTwo = htmlspecialchars($_POST['pseudo-player-two']);

    $rand = rand(0, 1);

    $wordChooser = null;
    $titlePageText = null;

    if ($rand == 0) {
        $wordChooser = $pseudoPlayerOne;
        $titlePageText = 'Player ' . $pseudoPlayerOne . ' choose the word :';
    } else {
        $wordChooser = $pseudoPlayerTwo;
        $titlePageText = 'Player ' . $pseudoPlayerTwo . ' choose the word :';
    }

    $_SESSION['pseudo1'] = $pseudoPlayerOne;
    $_SESSION['pseudo2'] = $pseudoPlayerTwo;
    $_SESSION['wordChooser'] = $wordChooser;


    // On crée une partie
    $game = new Game($pseudoPlayerOne, $pseudoPlayerTwo, $wordChooser, null);

    $hasErrorPseudo = $game->verifyPseudo();
    $hasSamePseudo = $game->verifySamePseudo();

    if ($hasErrorPseudo) {
        header('Location: ./?error=pseudo');
    } else if ($hasSamePseudo) {
        header('Location: ./?error=same');
    }

    // On enregistre la partie dans la session 
    $game->saveInSession();
} else {
    header('Location: ./');
}

require_once PATH_VIEWS . 'header.php';

require_once PATH_VIEWS . 'word.php';

require_once PATH_VIEWS . 'footer.php';

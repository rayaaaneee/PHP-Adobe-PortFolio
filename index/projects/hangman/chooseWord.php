<?php require_once 'header.php';
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
        $titlePageText = 'Le joueur ' . $pseudoPlayerOne . ' choisi le mot :';
    } else {
        $wordChooser = $pseudoPlayerTwo;
        $titlePageText = 'Le joueur ' . $pseudoPlayerTwo . ' choisi le mot :';
    }

    $_SESSION['pseudo1'] = $pseudoPlayerOne;
    $_SESSION['pseudo2'] = $pseudoPlayerTwo;
    $_SESSION['wordChooser'] = $wordChooser;

    // On crée une partie
    $game = new Game($pseudoPlayerOne, $pseudoPlayerTwo, $wordChooser, null);

    // On enregistre la partie dans la session 
    $game->saveInSession();
} else {
    header('Location: ./');
}
?>

<head>
    <link rel="stylesheet" href="<?= PATH_CSS; ?>chooseWord.css">
</head>
<div class="main-container-choose-word">
    <div class="container-choose-word">
        <div class="title-page-game-container">
            <img src="<?= PATH_IMG; ?>playerwhite.png" alt="Logo player" class="logo-player">
            <p class="title-page-game"><?= $titlePageText; ?></p>
        </div>
        <form action="./gamePage.php" class="choose-word-container" method="post">
            <input type="text" name="word" class="input-word" placeholder="Choisissez un mot" maxlength="20" required>
            <input type="submit" value="Valider" class="submit-word">
        </form>
    </div>
</div>
<?php require_once 'footer.php'; ?>
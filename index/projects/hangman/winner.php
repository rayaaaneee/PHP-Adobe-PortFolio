<?php require_once 'header.php';

$game = unserialize($_SESSION['game']);

if (!isset($_SESSION['game'])) {
    header('Location: ./');
    exit;
} else {
    unset($_SESSION['game']);
}
?>

<head>
    <link rel="stylesheet" href="<?= PATH_CSS; ?>winner.css">
</head>
<div class="main-container-winner-page">
    <div class="content-winner-page">
        <div class="all-texts-container">
            <div class="text-container">
                <div class="img-bar-container">
                    <img src="<?= PATH_IMG; ?>crown.png" alt="Image pendu" draggable="false">
                    <div class="separator-bar"></div>
                </div>
                <p class="surlign-text"><?php echo $game->getWinnerName(); ?></p>
                <p>has won the game against</p>
                <p class="surlign-text"><?php echo $game->getLoserName(); ?></p>
                <p>!</p>
            </div>
            <?php if ($game->getWordSearcher() != $game->getWinnerName()) { ?>
                <img class="img-loser" src="<?= PATH_IMG; ?>sprites/11.png" alt="Image pendu" draggable="false">
            <?php } ?>
            <div class="text-container">
                <p class="surlign-text"><?= $game->getWordSearcher(); ?></p>
                <?php
                if ($game->getWordSearcher() == $game->getWinnerName()) {
                    $text = 'has found the word "';
                } else {
                    $text = 'was looking for the word "';
                }
                ?>
                <p><?= $text ?></p>
                <p class="surlign-text"><?= $game->getWord(); ?></p>
                <p>" </p>
            </div>
        </div>
        <form action="./chooseWord.php" method="post">
            <input type="hidden" name="pseudo-player-one" value="<?= $game->getPseudo1(); ?>">
            <input type="hidden" name="pseudo-player-two" value="<?= $game->getPseudo2(); ?>">
            <button class="submit-restart-game" type="submit">New Game</button>
        </form>
        <a href="./" class="go-to-reception-button">Go to reception</a>
    </div>
</div>
<?php require_once 'footer.php'; ?>
<head>
    <link rel="stylesheet" href="<?= PATH_CSS; ?>game.css">
</head>
<div class="main-container-game-page">
    <div class="game-container">
        <?php if ($errorSendLetter === 'tried') { ?>
            <p class="already-tried-letter">Vous already tried letter <?= strtoupper($letter); ?> !</p>
        <?php } ?>
        <div class="word">
            <p>Word :</p>
            <?= $game->printWord(); ?>
        </div>
        <div class="form-img-container">
            <?php if ($errorSendLetter === 'invalid') { ?>
                <div class="invalid-letter-container">
                    <p class="invalid-letter">Character "</p>
                    <p class="surlign-text-error"><?= strtoupper($letter); ?></p>
                    <p class="invalid-letter">" isn't valid .</p>
                </div>
            <?php } ?>
            <form action="./?page=game" class="form-letter" method="post">
                <input type="text" name="letter" class="input-letter" maxlength="1" placeholder="Your letter" required>
                <input type="submit" class="submit-letter" value="Submit">
            </form>
            <?= $game->printImage(); ?>
        </div>
        <?= $game->printFalseLetters(); ?>
        <div class="nb-tries-container">
            <?= $game->printErrors(); ?>
        </div>
    </div>
</div>
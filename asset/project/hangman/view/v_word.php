<head>
    <link rel="stylesheet" href="<?= PATH_CSS; ?>word.css">
</head>
<div class="main-container-choose-word">
    <div class="container-choose-word">
        <div class="title-page-game-container">
            <img src="<?= PATH_IMG; ?>playerwhite.png" alt="Logo player" class="logo-player">
            <p class="title-page-game">Player</p>
            <p class="surlign-text-name title-page-game"><?= $wordChooser; ?></p>
            <p class="title-page-game">must choose a word :</p>
        </div>
        <div class="type-word">
            <div class="text">
                <p>The word must contain between</p>
                <p class="surlign-text">3</p>
                <p>and</p>
                <p class="surlign-text">20</p>
                <p>characters.</p>
            </div>
            <div class="text">
                <p class="surlign-text">Special characters</p>
                <p>are not allowed .</p>
            </div>
            <div class="text">
                <p>Accents</p>
                <p class="surlign-text"> (é, à, ç, ù..)</p>
                <p> are automatically replaced by the letter without .</p>
            </div>
            <div class="text">
                <p>Dashes</p>
                <p>,</p>
                <p class="surlign-text">spaces</p>
                <p>and</p>
                <p class="surlign-text">apostrophes</p>
                <p>are also allowed.</p>
            </div>
        </div>
        <form action="./?page=game" class="choose-word-container" method="post">
            <input type="text" name="word" class="input-word" placeholder="Choose a word" maxlength="20" minlength="3" required>
            <input type="submit" value="Validate" class="submit-word">
        </form>
    </div>
</div>
<head>
    <link rel="stylesheet" href="<?= PATH_CSS; ?>word.css">
</head>
<div class="main-container-choose-word">
    <div class="container-choose-word">
        <div class="title-page-game-container">
            <img src="<?= PATH_IMG; ?>playerwhite.png" alt="Logo player" class="logo-player">
            <p class="title-page-game"><?= $titlePageText; ?></p>
        </div>
        <div class="type-word">
            <div class="text">
                <p>Le mot doit contenir entre</p>
                <p class="surlign-text">3</p>
                <p>et</p>
                <p class="surlign-text">20</p>
                <p>caractères.</p>
            </div>
            <div class="text">
                <p>Les caractères spéciaux ne sont pas autorisés hormis les accents</p>
                <p class="surlign-text">(é, à, ç ..)</p>
                <p>.</p>
            </div>
            <div class="text">
                <p>Les </p>
                <p class="surlign-text">tirets</p>
                <p>,</p>
                <p class="surlign-text">espaces</p>
                <p>et</p>
                <p class="surlign-text">apostrophes</p>
                <p>sont aussi autorisés.</p>
            </div>
        </div>
        <form action="./?page=game" class="choose-word-container" method="post">
            <input type="text" name="word" class="input-word" placeholder="Choisissez un mot" maxlength="20" minlength="3" required>
            <input type="submit" value="Valider" class="submit-word">
        </form>
    </div>
</div>
<?php require_once 'header.php';
require_once PATH_DAO . 'GameDAO.php';

session_destroy();

$dao = new GameDAO();
$games = $dao->getLastGames();

?>
<div class="main-container">
    <div class="container-index-page main-container-recent-events">
        <div class="title-recents-events">
            <img src="<?= PATH_IMG ?>clock.png" alt="logo" class="logo-recent-events" draggable="false" />
            <h2>Dernières parties : </h2>
        </div>
        <div class="separator-bar"></div>
        <div class="all-informations-games">
            <?php
            $i = 0;
            foreach ($games as $game) { ?>
                <div class="game">
                    <img src="<?= PATH_IMG ?>crown.png" alt="crown" class="logo-winner" draggable="false" />
                    <div class="text-container">
                        <div class="text-container-players">
                            <p class="surlign-text"><?= $game['player1']; ?></p>
                            <p>a joué contre </p>
                            <p class="surlign-text"><?= $game['player2']; ?> !</p>
                        </div>
                        <div class="text-container-winner">
                            <p class="surlign-text"><?= $game['winner']; ?></p>
                            <p>a gagné, il a retrouvé le mot "</p>
                            <p class="surlign-text"><?= strtolower($game['word']); ?></p>
                            <?php if ($game['errors'] > 1) {
                            ?>
                                <p>" en </p>
                                <p class="surlign-text"><?= $game['errors']; ?></p>
                            <?php
                                $text = "erreurs !";
                            } else if ($game['errors'] == 1) {
                            ?>
                                <p>" en </p>
                                <p class="surlign-text"><?= $game['errors']; ?></p>
                            <?php
                                $text = "erreur !";
                            } else {
                                $text = '" sans erreurs !';
                            } ?>
                            <p><?= $text; ?></p>
                        </div>
                    </div>
                </div>
            <?php $i++;
            }

            if ($i == 0) { ?>
                <div class="no-game-container">
                    <p class="no-games">Aucune partie n'a encore été jouée,</br> faite des parties et elles s'afficheront ici !</p>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="container-index-page main-container-start-game">
        <img src="<?= PATH_IMG ?>main-img-white.png" alt="logo" class="logo-site" draggable="false" />
        <div class="set-informations">
            <form action="./chooseWord.php" class="form-main-page" method="post">
                <label for="name">Nom du Premier Joueur</label>
                <input type="text" name="pseudo-player-one" id="name-one" placeholder="pseudo1" maxlength="15" required />
                <label for="name">Nom du Deuxième Joueur</label>
                <input type="text" name="pseudo-player-two" id="name-two" placeholder="pseudo2" maxlength="15" required />
                <button type="submit">Valider</button>
            </form>
        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>
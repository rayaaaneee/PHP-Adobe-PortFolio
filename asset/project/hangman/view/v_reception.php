<head>
    <link rel="stylesheet" href="<?= PATH_CSS; ?>reception.css">
</head>
<div class="main-container">
    <div class="container-index-page main-container-recent-events  <?php if ($nbGames == 0) echo "main-container-no-games"; ?>">
        <div class="title-recents-events">
            <img src="<?= PATH_IMG ?>clock.png" alt="logo" class="logo-recent-events" draggable="false" />
            <h2>Last games : </h2>
        </div>
        <div class="all-informations-games">
            <?php foreach ($games as $game) { ?>
                <div class="game">
                    <div class="img-date-container">
                        <?php $date = new DateTime($game['date']); ?>
                        <p class="date"><?= $date->format("d M Y"); ?></p>
                        <img src="<?= PATH_IMG ?>crown.png" alt="crown" class="logo-winner" draggable="false" />
                        <?php $time = new DateTime($game['time']); ?>
                        <p class="time">At
                            <?php
                            $hour = $time->format("H");
                            $minute = $time->format("i");
                            if ($hour >= 12) {
                                $hour = $hour - 12;
                                echo $hour . ":" . $minute . " pm";
                            } else {
                                echo $hour . ":" . $minute . " am";
                            }
                            ?>
                        </p>
                    </div>
                    <div class="text-container">
                        <div class="text-container-players">
                            <p class="surlign-text"><?= $game['player1']; ?></p>
                            <p>played against </p>
                            <p class="surlign-text"><?= $game['player2']; ?></p>
                            <p>!</p>
                        </div>
                        <div class="text-container-winner">
                            <p class="surlign-text"><?= $game['winner']; ?></p>
                            <p>won, he found the word "</p>
                            <p class="surlign-text"><?= $game['word']; ?></p>
                            <?php if ($game['errors'] > 1) {
                            ?>
                                <p>" with </p>
                                <p class="surlign-text"><?= $game['errors']; ?></p>
                            <?php
                                $text = "errors !";
                            } else if ($game['errors'] == 1) {
                            ?>
                                <p>" with </p>
                                <p class="surlign-text"><?= $game['errors']; ?></p>
                            <?php
                                $text = "error !";
                            } else {
                                $text = '" without errors !';
                            } ?>
                            <p><?= $text; ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }

            if ($nbGames > 7) {
                $i = 0;
            ?>
                <div class="three-little-points">
                    <p> ● </p>
                    <p> ● </p>
                    <p> ● </p>
                </div>
            <?php
            } else {
            ?>
                <div class="separator-bar"></div>
            <?php
            }

            if ($nbGames == 0) { ?>
                <div class="no-game-container">
                    <p class="no-games">No games have been played yet,</br> do some and they will show up here!</p>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="container-index-page main-container-start-game">
        <img src="<?= PATH_IMG ?>main-img-white.png" alt="logo" class="logo-site" draggable="false" />
        <div class="separator-bar"></div>
        <?php
        if ($hasErrors) {
        ?>
            <div class="error-text-container">
                <p class='error'><?= $errorText ?></p>
            </div>
        <?php
        }
        ?>
        <div class="set-informations">
            <form action="./?page=word" class="form-main-page" method="post">
                <label for="name">First player name</label>
                <input type="text" name="pseudo-player-one" id="name-one" placeholder="pseudo1" maxlength="15" required />
                <label for="name">Second player name</label>
                <input type="text" name="pseudo-player-two" id="name-two" placeholder="pseudo2" maxlength="15" required />
                <button type="submit">Validate</button>
            </form>
        </div>
    </div>
</div>
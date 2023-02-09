<?php

$game = unserialize($_SESSION['game']);

if (!isset($_SESSION['game'])) {
    header('Location: ./');
    exit;
} else {
    unset($_SESSION['game']);
}

require_once PATH_VIEWS . 'header.php';

require_once PATH_VIEWS . 'win.php';

require_once PATH_VIEWS . 'footer.php';

<?php

if (isset($_POST['set-dark-mode'])) {
    $isLightTheme = false;
    $theme->setTheme($isLightTheme);
} else if (isset($_POST['set-light-mode'])) {
    $isLightTheme = true;
    $theme->setTheme($isLightTheme);
}

require_once PATH_VIEWS . 'index.php';

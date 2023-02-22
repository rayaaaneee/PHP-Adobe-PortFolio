<?php
// Site
define('PATH_ASSETS', 'asset/');
define('PATH_CSS', PATH_ASSETS . 'css/');
define('PATH_SCRIPTS', PATH_ASSETS . 'js/');
define('PATH_IMAGES', PATH_ASSETS . 'img/');
define('PATH_MEDIA', PATH_CSS . 'media/');
define('PATH_PROJECTS', PATH_ASSETS . 'project/');
define('PATH_FONTS', PATH_ASSETS . 'fonts/');
define('PATH_FILES', PATH_ASSETS . 'files/');

// Path
define('PATH_VIEWS', 'view/v_');
define('PATH_MODELS', 'model/');
define('PATH_CONTROLLERS', 'controller/c_');
define('PATH_DATABASE', PATH_MODELS . 'database/');
define('PATH_PRESENTERS', PATH_MODELS . 'presenter/');
define('PATH_DAO', PATH_DATABASE . 'dao/');
define('PATH_DTO', PATH_DATABASE . 'dto/');

// Database
function defineConnection()
{
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'portfolio');
    define('DB_PORT', '8889');
    define('DB_CHARSET', 'utf8');

    define('DB_USR', 'root');
    define('DB_PWD', 'root');
}

/* function defineConnection()
{
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'portfolio');
    define('DB_PORT', '3306');
    define('DB_CHARSET', 'utf8');

    define('DB_USR', 'root');
    define('DB_PWD', 'Opqdkjqo64$');
} */

defineConnection();

<?php

require_once PATH_DATABASE . "Connection.php";
require_once PATH_CLASSES . "Project.php";
require_once PATH_CLASSES . "FetchJSON.php";

require_once PATH_PRESENTERS . "indexPresenter.php";

$projects_array = FetchJSON::fetchLocalJSON(PATH_DATAS . "home/project.json");

$projects = [];

foreach ($projects_array as $project_array) {
    $projects[] = new Project($project_array);
}

$projects = array_reverse($projects);

require_once PATH_VIEWS_PARTS . "header.php";

require_once PATH_VIEWS . "home.php";

require_once PATH_VIEWS_PARTS . "footer.php";

<?php

require_once PATH_DATABASE . "Connection.php";
require_once PATH_DAO . "ProjectDAO.php";
require_once PATH_MODELS . "Project.php";

require_once PATH_PRESENTERS . "indexPresenter.php";

$projects = ProjectDAO::getAllProjects();

require_once PATH_VIEWS . "header.php";

require_once PATH_VIEWS . "home.php";

require_once PATH_VIEWS . "footer.php";

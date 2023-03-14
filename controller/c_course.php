<?php

require_once PATH_MODELS . 'FetchJSON.php';
require_once PATH_MODELS . 'Semester.php';

$semestersArray = FetchJSON::fetchLocalJSON(PATH_DATAS . 'course/semester.json');

$semesters = Semester::processRow($semestersArray);
$nbSemesters = count($semesters);

require_once PATH_VIEWS . 'header.php';

require_once PATH_VIEWS . 'course.php';

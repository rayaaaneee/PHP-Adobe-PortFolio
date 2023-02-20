<?php

function getProjects($db)
{
    $sql = "SELECT * FROM projects ORDER BY id DESC";
    $query = $db->prepare($sql);
    $query->execute();
    $projects = $query->fetchAll();
    return $projects;
}

function DownloadOrLink($bool)
{
    if ($bool) {
        return 'download';
    } else {
        return 'target="_blank"';
    }
}

function isDownload($bool)
{
    if ($bool) {
        return 1;
    } else {
        return 0;
    }
}

function isLink($bool)
{
    if ($bool) {
        return 0;
    } else {
        return 1;
    }
}

function getImageName($bool)
{
    if ($bool) {
        echo "download";
    } else {
        echo "link";
    }
    return;
}

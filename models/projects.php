<?php

function getProjects($db) {
    $sql = "SELECT * FROM projects";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $projects = $stmt->fetchAll();
    return $projects;
}

function DownloadOrLink($bool){
    if($bool){
        return 'download';
    } else {
        return 'target="_blank"';
    }
}

function getImageName($bool){
    if($bool){
        echo "download.png";
    } else {
        echo "link.png";
    }
    return;
}
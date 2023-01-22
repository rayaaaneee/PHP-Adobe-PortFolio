<?php
    
function getProjects($db) {
    $sql = "SELECT * FROM projects ORDER BY id DESC";
    $query = $db->prepare($sql);
    $query->execute();
    $projects = $query->fetchAll();
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
        echo "download";
    } else {
        echo "link";
    }
    return;
}
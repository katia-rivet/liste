<?php

function redirection($page){
    $pages = array();
    $root = '/liste/';
    $pages['accueil'] = 'index.html';
    $pages['liste'] = 'pages/listejeux.php';
    header("location: $root$pages[$page]");
}
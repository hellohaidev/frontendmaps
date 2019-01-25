<?php 

switch($_GET['page']){
    case 'home' :
    if($_GET['page']){
        include './inc/home.php';
        $content = $home;
    } 
    break;

    case 'database' :
    if($_GET['page']){
        include './inc/database.php';
        $content = $database;
    } 
    break;

    case 'delete' :
    if($_GET['page']){
        include './inc/delete.php';
        $content = $delete;
    } 
    break;
    
    case 'map' :
    if($_GET['page']){
        include './inc/map.php';
        $content = $map;
    } 
    break;
    

    case 'edit' :
    if($_GET['page']){
        include './inc/edit.php';
        $content = $edit;
    } 
    break;
    
    default :
        include './inc/home.php';
        $content = $home;
        break;
}
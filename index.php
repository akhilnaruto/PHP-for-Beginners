<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
include_once "classes/Page_Data.class.php";

$pageData = new Page_Data();
$pageData->title = "Thomas Blom Hansen: Portfolio site";
$pageData->content = include_once "views/navigation.php";
//indicate the relative path to the file to include
$isNavigationClicked = isset($_GET['page']);
if($isNavigationClicked){
    $fileToLoad = $_GET['page'];
}else{
    $fileToLoad="skills";
}

$pageData->content .= include_once "views/$fileToLoad.php";  //observer .= , its for concatication
$pageData->css = "<link href='css/layout.css' rel='stylesheet' />";
$page = include_once "templates/page.php";
echo $page;




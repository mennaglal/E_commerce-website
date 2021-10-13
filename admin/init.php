<?php
include"includes/languages/english.php";
//routes
$tpls='includes/templates/'; //template path
$func='includes/functions/';
include$func."function.php";
include"connect.php";
include$tpls. "header.php";
if(!isset($nonavbar)){
       include'navbar.php';
}
<?php
$dsn ='mysql:host=localhost;dbname=shopwebsite';
$name='root';
$pass='';
$option=array(
    PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
);
try{
    $con=new PDO($dsn,$name,$pass,$option);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo'you are connected to database';
}
catch(PDOException $e){
    echo'you failed to connect database'.  $e->getMessage();
}

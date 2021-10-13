<?php
$do='';
if(isset($_GET['do'])){
    $do= $_GET['do'];
}
else{
    $do='Manage';
}
if( $do=='Manage'){
    echo 'Welcome you are in Main page';
    echo '<a href="page.php?do=Add">add Cat</a>';
}
elseif( $do=='Add'){
    echo 'Welcome you are in Add page';
}
<?php
     session_start();
     $pagetitle='Dashboard';
  if(isset($_SESSION['username'])){
      
     include'init.php';
    
     include$tpls. "footer.php";
     echo'Welcome ';
    
    }
    else{
         header("Location: index.php");
        
       }
    ?>
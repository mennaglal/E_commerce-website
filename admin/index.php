<?php
     session_start();
     $nonavbar='';
     $pagetitle='Login';
     include"init.php";
     //include "includes/languages/arabic.php";
     if($_SERVER['REQUEST_METHOD']=='POST'){
       $username=$_POST['user'];
       $password=$_POST['pass'];
       $hashpass=sha1($password);
       //check if the user in database
       $stmt=$con->prepare("SELECT username,password,userId FROM users WHERE username=? AND password=? AND groupid=1 LIMIT 1");
       $stmt->execute(array($username,$hashpass));
       $row=$stmt->fetch();
       $count=$stmt->rowCount();
       //if count >0  this mean the database contain record about username
       if($count>0){
         
        echo'sucess login ';
         $_SESSION['username']=$username;
         $_SESSION['userId']=$row['userId'];
         header("Location:dashboard.php");
         exit();
       }
       else{
         echo'Failed login ,Please check Username or Password';
       }
    }
?>
    
<form class="login" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <h4 class="text-center">Admin Login</h4>
    <input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off">
    <input class="form-control" type="password" name="pass" placeholder="Password" autocomplete="new password">
    <input class="btn btn-primary btn-block" id="submit" type="submit" value="Login">
  </form>
<style>
  .login input{
    margin-bottom: 10px;
}
.login h4{
    color:#5c2b5e;;
}
.login .form-control{
    background-color: #e0b0d4;
}

  .login .form-control{
    background-color: #e0b0d4;
}
.login .btn {
     background-color: #a31183;
     display: block;
     width: 300px;
     border: 0;
}
</style>
<?php
     include $tpls. "footer.php";
?>
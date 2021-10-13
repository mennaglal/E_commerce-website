<?php
     session_start();
     $do='';
     $pagetitle='Members';
     $id='';
  if(isset($_SESSION['username']))
  {
        
        include'init.php';
        if(isset($_GET['do'])){
            $do= $_GET['do'];
        }
        else{
            $do='Manage';
        }
        if($do=='Manage'){

        }
        elseif($do=='Edit')
        {
            if(isset($_GET['userid']))
            {
                $id=($_GET['userid']);
            }
            else
            {
                $id=0;
            }
            
            $stmt=$con->prepare("SELECT *FROM users WHERE userId=?LIMIT 1");
            $stmt->execute(array($id));
            $row=$stmt->fetch();
            $count=$stmt->rowCount();
            if($count>0)
            {?>
             <h1 class="text-center">Edit Member</h1>
             <div class="container">
                 <form class="form-horizontal" action="?do=Update" method="POST">
                     <input type="hidden" name="userid"value="<?php echo $id?>">
                     <div class="form-group form-group-lg">
                         <label class="col-sm-2 control-label">Username</label>
                         <div class="col-sm-10 col-md-4">
                             <input class="form-control" type="text"name="username"  placeholder="Username"autocomplete="off" value="<?php echo $row['username']?>">
                         </div>
                     </div>
                     <div class="form-group form-group-lg">
                         <label class="col-sm-2 control-label">Password</label>
                         <div class="col-sm-10 col-md-4">
                             <input class="form-control" type="password"name="password" placeholder="Password"autocomplete="new password">
                         </div>
                     </div>
                     <div class="form-group form-group-lg">
                         <label class="col-sm-2 control-label">E-Mail</label>
                         <div class="col-sm-10 col-md-4">
                             <input class="form-control" type="email"name="email" placeholder="E-Mail"autocomplete="off" value="<?php echo $row['email']?>">
                         </div>
                     </div>
                     <div class="form-group form-group-lg">
                         <label class="col-sm-2 control-label">FullName</label>
                         <div class="col-sm-10 col-md-4">
                             <input class="form-control" type="text"name="fullname" placeholder="FullName"autocomplete="off" value="<?php echo $row['fullname']?>">
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="col-sm-offset-2 col-sm-10">
                             <input class="btn btn-primary btn-lg" type="submit"value="Save">
                         </div>
                     </div>
                 </form>
             </div>
             
             <style>
                 .form-control,.form-control:focus{
                     
                        background-color: #e0b0d4;
                 }
                 .control-label{
                 font-weight: bold;
                 color:#5c2b5e;
                 }
                 h1{
                     font-size: 55px;
                     font-weight: bold;
                     margin: 40px auto;
                     color: #5c2b5e;
                 }
                .btn,.btn:focus,.btn:hover {
                     background-color: #a31183;
                     display: block;
                     border: 0;
                     margin-top: 10px;
                    }
             </style>
             <?php
             }
        
            else{
                echo'failed user';
            }
            

        
        }
        elseif($do=='Update')
        {
            echo"<h1 class='text-center'>Update Member</h1>";
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $user=$_POST['username'];
                $email=$_POST['email'];
                $full=$_POST['fullname'];
                $id=$_POST['userid'];
                echo $id.$email.$full.$user;
                //check if the user in database
               $stmt=$con->prepare("UPDATE users SET username=? , email=? , fullname=? WHERE userId=? ");
               $params = array(
                $user,
                $email,
                $full,
                $id,
            );
               $stmt->execute($params);
              
               echo $stmt->rowCount()." record updated";
           }
           else 
           {
                echo"Sorry you canot login this page Directely";
           }
        }
     include$tpls. "footer.php";
    
    }
    else
    {
         header("Location: index.php");
        
    }
    ?>
<?php 
require_once('connection.php');  //including connection.php file 
session_start();
    if(isset($_POST['signIn_login'])) 
    {
       if(empty($_POST['username']) || empty($_POST['password']))
       {
           echo 'Please Fill in the Blanks';
           
       }
       else
       {
            $query="select * from login where username='".$_POST['username']."' and password='".$_POST['password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))                 //it fetches a result row as an associative array
            {
                $_SESSION['User']=$_POST['username'];
                header("location:welcome.php");
            }
            else
            {
                 echo 'Please Enter Correct User Name and Password';
               // header("location:index.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working';
    }

?>
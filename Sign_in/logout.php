<?php 
    session_start();
    if(isset($_GET['logout']))//logout click event
    {
        session_destroy();
        header("location:../signin.html");
    }

?>
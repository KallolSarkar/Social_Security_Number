<?php
    session_start();

    if(isset($_SESSION['User']))
    {
        echo ' Well Come ' . $_SESSION['User'].'<br/><hr>';
        echo '<a href="logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:../index.html");
    }

?>
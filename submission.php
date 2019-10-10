<?php
    session_start();
    if(isset($_SESSION['temp_session']))
    {
        echo $_SESSION['temp_session'][0].' '.$_SESSION['temp_session'][1];
    }

    
?>
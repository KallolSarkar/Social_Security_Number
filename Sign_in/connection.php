<?php

    //$database_name='testdb';
    $con=mysqli_connect('localhost','root','','testdb');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>
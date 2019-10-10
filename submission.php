<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['temp_session']))
    {
        //echo $_SESSION['temp_session'][0].' '.$_SESSION['temp_session'][1];
	    $first_name = $_SESSION['temp_session'][0];
        $last_name =$_SESSION['temp_session'][1];
    
         //storing using mysql
        $tablename="login";
        // Create connection
        $conn = new mysqli('localhost','root','','testdb');
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO $tablename (username, password)
        VALUES ('$first_name', '$last_name')";
        if ($conn->query($sql)) {
                //window.alert("sometext");

                echo  '<script type="text/JavaScript">
	 	        alert("Registered Successfully");
              </script>';
              echo 'Registered Successfully <br><hr>';
              echo ' Click here to <a href="signin.html">Sign in</a>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            
        }
        $conn->close();
        session_destroy();

    }
    else{
        header('location:signup.php');
    }
?>      
</body>
</html>
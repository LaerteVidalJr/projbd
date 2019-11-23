<?php
    session_start();
    $_SESSION["conn"] = mysqli_connect("localhost",$_POST["user"],$_POST["pass"],"bibliodb");

    if(!$_SESSION["conn"]){
        session_unset();
        session_destroy();
        header("Location: http://localhost/projbd/",true,401);
    }
    header("Location: http://localhost/projbd/index1.php",true,301);
?>

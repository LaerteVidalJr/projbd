<?php
    $conn = $_SESSION["conn"];
    $stmt = $conn->prepare("SELECT * FROM 'funcionario' WHERE 'nome' = '?' ");
    $stmt->bind_param("s",$_POST["func"]);
    $result = $stmt->query();
    if($result->num_rows >0){
        $row = $result->fetch_assoc();
        $_SESSION["func"] = $row["id"];
        header("Location: http://localhost/projbd/home.php",true,301);
    }else{
        header("Location: http://localhost/projbd/index1.php",true,401);
    }

?>

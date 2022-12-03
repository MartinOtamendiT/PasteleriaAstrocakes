<?php
    include("conexion.php"); 
    $name = $_REQUEST['name'];
    $last_name = $_REQUEST['last_name'];
    $user = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    
    if($user=='' or $pass=='' or $name=='' or $last_name==''){
        header("location:./sign_in-error.php?error=1");
    }
    else{
        $link = Conectar();
        $query = "INSERT INTO CLIENT VALUES('$user','$pass','$name','$last_name')";
        mysqli_query($link,$query);
        header("location:./login-error.php?error=4");
    }

?>
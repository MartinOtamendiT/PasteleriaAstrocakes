<?php
    include("conexion.php"); 
    $user = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    /*$user = $_REQUEST['name'];
    $user = $_REQUEST['last_name'];*/
    
    $link = Conectar();
    $query = "SELECT EMAIL, PASS FROM CLIENT WHERE EMAIL = '".$user."'";
    $consuta = mysqli_query($link,$query);
    $datos = mysqli_num_rows($consuta);

    //Hay un usuario.
    if($datos == 1){
        while($fila = mysqli_fetch_row($consuta)){
            if($fila[1] == $pass){
                print("<br>Acceso concedido");
                session_start();
                $_SESSION['usuario'] = $fila[0];

                header("location:./welcome.php");
            }
            else{
                print("<br>Acceso denegado");
                header("location:./login-error.php?error=1");
            }
        }
    }
    //Hay multiples usuarios.
    elseif($datos > 1){
        print("<br>Error al consultar. Contacte al administrador.");
        header("location:./login-error.php?error=2");
    }
    //El usuario no existe.
    elseif($datos == 0){
        print("<br>Error al consultar. Contacte al administrador.");
        header("location:./login-error.php?error=3");
    }
?>
<?php
session_start();
include 'conexion.php';

if (isset($_POST['login']) && isset($_POST['password'])) {

    $user = $db->real_escape_string($_POST['login']);
    $enc_pwd = $db->real_escape_string($_POST['password']);

    $result = $db->query("SELECT Id_usuario,Usuario,Contrasena FROM usuarios Where Usuario = '$user' AND Contrasena= '$enc_pwd'");
    $finder = $result->num_rows;

    if ($finder > 0) {
        while ($row = $result->fetch_array()) {
            $_SESSION["session_user"] = $row["Usuario"]; 
            $_SESSION["session_id_user"] = $row["Id_usuario"]; 
            $_SESSION["valido_user"] = 1; 
        }
        echo 1;
    }else{
        echo 0;
    }
}
?>


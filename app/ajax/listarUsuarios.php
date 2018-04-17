<?php
include '../model/Usuarios.php';

if (isset($_POST)){
    if (isset($_POST['user']) && isset($_POST['pass'])){
        $user =  new Usuarios(null, $_POST['user'],$_POST['pass']);
        $res = $user->validateUser();
        if ($res){
            session_start();
            $_SESSION['sqlOpenCommunityUsername'] = $_POST['user'];
            echo 'Datos Correctos';
        }        
    }
}

//$user =  new Usuarios(null, 'Marenco');
//echo json_encode($user->validateUser());
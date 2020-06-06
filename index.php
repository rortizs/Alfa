<?php

include_once 'modelos/user.php';
include_once 'modelos/user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])) {
    //echo 'hay sesion';

    $user->setUser($userSession->getCurrentUser());
    header('location: vistas/menu.php');
} else if(isset($_POST['username']) && isset($_POST['password'])) {



    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    
    if($user->userExists($userForm, $passForm)){
        // echo "si coinside";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        
        // include_once 'vistas/home.php';
        header('location: vistas/menu.php');
    } else {
        // echo "Usuario y/o Contraseña incorrecta";
        $errorLogin = "Usuario y/o Contraseña es incorrecto";
        include_once 'vistas/login.php';
        // header('location: vistas/login.php');
    }
} else {
    include_once 'vistas/login.php';
}

?>
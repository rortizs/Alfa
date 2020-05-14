<?php

include_once 'modelos/user.php';
include_once 'modelos/user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])) {
    echo 'hay sesion';
} else if(isset($_POST['username']) && isset($_POST['password'])) {
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    $user = new User();
    if($user->userExists($userForm, $passForm)){
        // echo "si coinside";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
    } else {
        // echo "Usuario y/o Contraseña incorrecta";
        $errorLogin = "Usuario y/o Contraseña es incorrecto";
        include_once 'vistas/login.php';
    }
} else {
    include_once 'vistas/login.php';
}

?>
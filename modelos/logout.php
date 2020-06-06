<?php

    include_once 'user_session.php';

    $userSession = new UserSession();
    $userSession->closeSession();
    $_SESSION['mensaje'] = '';
    session_destroy();
    header("location: ../index.php");

?>
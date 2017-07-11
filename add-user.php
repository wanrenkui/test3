<?php
    include "UserManager.php";

    $user = $_REQUEST;

    $userManager = new UserManager();
    $userManager->addUser($user);
    header("Location:list-user.php");
?>

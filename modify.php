<?php
    include "UserManager.php";
    $user = $_REQUEST;
    $userManager = new UserManager();

    $userManager->modifyUser($user);
    header("Location:list-user.php");
?>
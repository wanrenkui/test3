<?php
    include "UserManager.php";
    $id = $_REQUEST['id'];

    $userManager = new UserManager();
    $userManager->delUser($id);
    header("Location:list-user.php");
?>
<?php

namespace Controller;

use Modal\Service\UserService;


class UserController
{
    public function listAction()
    {
        $users = $this->getUserService()->listUsers();

        include "Views/list-view.html.php";
    }

//    public function addAction()
//    {
//        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//            $condition = $_POST;
//
//            $this->getUserService()->addUser($condition);
//
//            $users = $this->getUserService()->listUsers();
//
//            include "Views/list-view.html.php";
//
//        } else {
//            header('Location: Views/add-view.html.php');
//        }
//    }
//
//    public function delAction()
//    {
//        $id =$_REQUEST['id'];
//
//        $this->getUserService()->delUser($id);
//
//        $users = $this->getUserService()->listUsers();
//
//        include "Views/list-view.html.php";
//    }
//
//    public function modifyAction()
//    {
//        if($_SERVER['REQUEST_METHOD'] == 'POST'){
//            $condition = $_POST;
//            $this->getUserService()->modifyUser($condition);
//
//            $users = $this->getUserService()->listUsers();
//
//            include "Views/list-view.html.php";
//        }else{
//            $id = $_GET['id'];
//
//            $user = $this->getUserService()->getUserById($id);
//
//            include "Views/edit-view.html.php";
//        }
//    }

    private function getUserService()
    {
        $userService = new UserService();
        return $userService;
    }
}

?>
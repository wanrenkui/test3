<?php

include "pdoObject.php";
include "Modal/user-modal.php";

class User
{
    public function listAction()
    {
        $users = $this->getUserModal()->listUsers();

        include "Views/list-view.html.php";
    }

    public function addAction()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $condition = $_POST;

            $this->getUserModal()->addUser($condition);

            $users = $this->getUserModal()->listUsers();

            include "Views/list-view.html.php";

        } else {
            header('Location: Views/add-view.html.php');
        }
    }

    public function delAction()
    {
        $id =$_REQUEST['id'];

        $this->getUserModal()->delUser($id);

        $users = $this->getUserModal()->listUsers();

        include "Views/list-view.html.php";
    }

    public function modifyAction()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $condition = $_POST;
            $this->getUserModal()->modifyUser($condition);

            $users = $this->getUserModal()->listUsers();

            include "Views/list-view.html.php";
        }else{
            $id = $_GET['id'];

            $user = $this->getUserModal()->getUserById($id);

            include "Views/edit-view.html.php";
        }
    }

    private function getUserModal()
    {
        $pdo = new pdoObject();

        $userModal = new Users($pdo);

        return $userModal;
    }
}

?>
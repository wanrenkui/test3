<?php

namespace Modal\Repository;

use Modal\Modal\UserModal;
use PDO\pdoObject;

class UserRepository {

    public function selectAll(){

        $userModal = new UserModal();
        $sql = "SELECT * FROM {$userModal->table}";

        $pdoObject = pdoObject::getInstance();
        $stmt = $pdoObject ->DB() ->prepare($sql);
        $stmt ->execute();

        $users = $stmt ->fetchAll();
        return $users;
    }

//    public function add($user,$sql){
//        $pdoObject = PdoExt_user::getInstance();
//        $stmt = $pdoObject ->DB() ->prepare($sql);
//        $stmt -> execute(
//            $user
//        );
//    }
//
//    public function update($modifyUser,$sql){
//        $pdoObject = PdoExt_user::getInstance();
//
//        $stmt = $pdoObject ->DB() ->prepare($sql);
//        $stmt -> execute(
//            array(
//                $modifyUser['username'],
//                $modifyUser['sex'],
//                $modifyUser['age'],
//                $modifyUser['info'],
//                $modifyUser['id']
//            )
//        );
//    }
//
//    public function delete($delUserId,$sql){
//        //$pdoObject = new pdoObject();
//        $pdoObject = new PdoExt_user();
//
////        $sql = 'DELETE FROM users WHERE id= ?';
//        $stmt = $pdoObject -> DB() ->prepare($sql);
//        $stmt -> execute(array($delUserId));
//    }
//
//    public function select($id, $sql) {
//        //$pdoObject = new pdoObject();
//        $pdoObject = new PdoExt();
//
////        $sql = 'SELECT * FROM users WHERE id= ?';
//        $stmt = $pdoObject ->DB() ->prepare($sql);
//        $stmt -> execute(array($id));
//
//        $users = $stmt ->fetch();
//
//        return $users;
//    }
//
//    public function selectUserByID($id,$sql){
//        //$pdoObject = new pdoObject();
//        $pdoObject = new PdoExt();
//
////        $sql = 'SELECT * FROM users WHERE id= ?';
//        $stmt = $pdoObject ->DB() ->prepare($sql);
//        $stmt -> execute(array($id));
//
//        $users = $stmt ->fetch();
//
//        return $users;
//    }
}

<?php

namespace Modal_s;

use r_DB_user\r_users;

class UserManager
{
    public function listUsers()
    {

        $sql = 'SELECT * FROM users';
        $operationalDatabase=new r_users();
        $users = $operationalDatabase ->selectAll($sql);
        return $users;
    }

    public function addUser($user)
    {
        $sql = 'INSERT INTO users (name, gender, age, info) VALUES (?,?,?,?)';

        $operationalDatabase=new r_users();
        $user = array(
            $user['username'],
            $user['sex'],
            $user['age'],
            $user['info']
        );

        $operationalDatabase ->add($user,$sql);
    }

    public function modifyUser($modifyUser)
    {
        $sql = 'UPDATE users SET name= ?, gender= ?, age = ?, info= ? WHERE id= ?';

        $operationalDatabase=new r_users();

        $operationalDatabase ->update($modifyUser,$sql);
    }

    public function delUser($delUserId)
    {
        $sql = 'DELETE FROM users WHERE id= ?';
        $operationalDatabase=new r_users();

        $operationalDatabase ->delete($delUserId,$sql);
    }

    public function getUserById($id)
    {
        $sql = 'SELECT * FROM users WHERE id= ?';

        $operationalDatabase=new r_users();

        $operationalDatabase ->selectUserByID($id,$sql);
    }
}

?>
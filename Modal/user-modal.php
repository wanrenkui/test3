<?php

class Users
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function listUsers()
    {
        $sql = 'SELECT * FROM users';
        $stmt = $this ->pdo ->DB() ->prepare($sql);
        $stmt ->execute();

        $users = $stmt ->fetchAll();

        return $users;
    }

    public function addUser($user)
    {
        $sql = 'INSERT INTO users (name, gender, age, info) VALUES (?,?,?,?)';
        $stmt = $this ->pdo ->DB() ->prepare($sql);
        $stmt -> execute(
            array(
                $user['username'],
                $user['sex'],
                $user['age'],
                $user['info']
            )
        );

    }

    public function modifyUser($modifyUser)
    {
        $sql = 'UPDATE users SET name= ?, gender= ?, age = ?, info= ? WHERE id= ?';
        $stmt = $this ->pdo ->DB() ->prepare($sql);
        $stmt -> execute(
            array(
                $modifyUser['username'],
                $modifyUser['sex'],
                $modifyUser['age'],
                $modifyUser['info'],
                $modifyUser['id']
            )
        );

    }

    public function delUser($delUserId)
    {
        $sql = 'DELETE FROM users WHERE id= ?';
        $stmt = $this ->pdo -> DB() ->prepare($sql);
        $stmt -> execute(array($delUserId));

    }

    public function getUserById($id)
    {
        $sql = 'SELECT * FROM users WHERE id= ?';
        $stmt = $this ->pdo ->DB() ->prepare($sql);
        $stmt -> execute(array($id));

        $users = $stmt ->fetch();

        return $users;
    }
}
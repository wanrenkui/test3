<?php

include "pdoObject.php";

class UserManager
{
	public function listUsers()
	{
	    $pdoObject = new pdoObject();

		$sql = 'SELECT * FROM users';
		$stmt = $pdoObject ->DB() ->prepare($sql);
		$stmt ->execute();

        $users = $stmt ->fetchAll();

        return $users;
	}

	public function addUser($user)
	{
        $pdoObject = new pdoObject();

        $sql = 'INSERT INTO users (name, gender, age, info) VALUES (?,?,?,?)';
        $stmt = $pdoObject ->DB() ->prepare($sql);
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
        $pdoObject = new pdoObject();

        $sql = 'UPDATE users SET name= ?, gender= ?, age = ?, info= ? WHERE id= ?';
        $stmt = $pdoObject ->DB() ->prepare($sql);
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
        $pdoObject = new pdoObject();

        $sql = 'DELETE FROM users WHERE id= ?';
        $stmt = $pdoObject -> DB() ->prepare($sql);
        $stmt -> execute(array($delUserId));

	}

	public function getUserById($id)
	{
        $pdoObject = new pdoObject();

        $sql = 'SELECT * FROM users WHERE id= ?';
        $stmt = $pdoObject ->DB() ->prepare($sql);
        $stmt -> execute(array($id));

        $users = $stmt ->fetch();

        return $users;
	}
}

?>
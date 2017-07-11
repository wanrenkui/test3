<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>用户信息</title>
</head>
<body>
    <h2>用户列表</h2>
    <table border="1">
        <tr>
            <th width="20%">姓名</th>
            <th width="20%">性别</th>
            <th width="20%">年龄</th>
            <th width="20%">个人简介</th>
            <th width="20%">操作</th>
        </tr>
        <?php
            include "UserManager.php";

            $delUser = 'del-user.php';
            $modifyUser = 'modify-user.php';
            $userManager = new UserManager();
            $users = $userManager->listUsers();
            
            foreach ($users as $user) {
                if (empty($user['id'])){
                    continue;
                } else{
                    echo "<tr>";
                    echo "<td>$user[name]</td>";
                    echo "<td>$user[gender]</td>";
                    echo "<td>$user[age]</td>";
                    echo "<td>$user[info]</td>";
                    echo "<td><a href =".$delUser."?id=".$user['id'].">删除</a>";
                    echo "|";
                    echo "<a href =".$modifyUser."?id=".$user['id'].">修改</a></td>";
                    echo "</tr>";
                }
            }            
        ?>
    </table>
    <a href="index.html">新增用户</a></body>
</body>

</html>
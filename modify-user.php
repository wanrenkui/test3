<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
</head>
    <?php
    include "UserManager.php";

    $modifyId = $_REQUEST['id'];
    $userManager = new UserManager();
    $user = $userManager->getUserById($modifyId);

    echo "<form action='modify.php' method='get'>";
    echo "<label for='username'>姓名：</label>";
    echo "<input id='username' name='username' value='$user[name]' onkeyup=\"value=value.replace(/[|]/g,'')\"></br>";
    echo "<label>性别：</label>";

    if ($user['gender'] == '男') {
        echo "男<input type='radio' name='sex' value='男' checked='checked'>";
        echo "女<input type='radio' name='sex' value='女'></br>";
    } else {
        echo "男<input type='radio' name='sex' value='男'>";
        echo "女<input type='radio' name='sex' value='女' checked='checked'></br>";
    }

    echo "<label for='age'>年龄：</label>";
    echo "<input id='age' name='age' value='$user[age]' onkeyup=\"value=value.replace(/[|]/g,'')\"></br>";
    echo "<label for='info'>简介：</label>";
    echo "<textarea id='info' name='info' onkeyup=\"value=value.replace(/[|]/g,'')\">"."$user[info]"." </textarea></br>";
    echo "<input style='display:none' name='id' value='$user[id]'>";
    echo "<input type='submit' value='提交修改' />";
    echo "</form>";

    ?>

</html>

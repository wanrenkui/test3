<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>用户信息</title>
    <meta name="keywords" content="关键词,5个左右,单个8汉字以内">
    <meta name="description" content="网站描述，字数尽量空制在80个汉字，160个字符以内！">
</head>
<body>
<a href="../index.php?controller=user&action=list">查看用户</a>
<form action="../index.php?controller=user&action=add" method="POST">
    <label for="username">姓名:</label>
    <input id="username" name="username" placeholder="请输入姓名" onkeyup="value=value.replace(/[|]/g,'')">
    <br>
    <label>性别:</label>
    男<input type="radio" name="sex" value="男" checked="checked">
    女<input type="radio" name="sex" value="女"></br>
    <label for="age">年龄:</label>
    <input id="age" name="age" placeholder="请输入年龄" onkeyup="value=value.replace(/[|]/g,'')">
    <br>
    <label for="info">简介:</label>
    <textarea id="info" name="info" onkeyup="value=value.replace(/[|]/g,'')"></textarea>
    <br>
    <input type="submit" value="提交" />
</form>
</body>

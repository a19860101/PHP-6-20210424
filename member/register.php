<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="store.php" method="post">
        <div>
            <label for="">帳號</label>
            <input type="text" name="user">
        </div>
        <div>
            <label for="">密碼</label>
            <input type="password" name="pw">
        </div>
        <div>
            <label for="">E mail</label>
            <input type="text" name="mail">
        </div>
        <input type="submit" value="註冊會員">
        <input type="button" value="取消" onclick="history.back()">
    </form>
</body>
</html>
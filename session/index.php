<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_SESSION["USER"])){
            echo $_SESSION["USER"];
        }
    ?>
    <form action="response.php" method="post">
        <input type="text" name="user">
        <input type="submit" value="紀錄">
    </form>
</body>
</html>
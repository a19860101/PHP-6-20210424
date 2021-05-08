<?php
    require_once("pdo.php");
    try {
        $sql = "SELECT * FROM students";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        // $students = array();
        // while($row = $stmt->fetch()){
            // $students[] = $row;
        // }
        $students = $stmt->fetchAll();
    }catch(PDOException $e){
        echo $e->getMessage();
    }
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th {
            border: 1px solid #aaa;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <a href="create.php">新增學員資料</a>
    <table>
        <tr>
            <th>#</th>
            <th>姓名</th>
            <th>MAIL</th>
            <th>動作</th>
        </tr>
    <?php foreach($students as $student){ ?>
        <tr>
            <td><?php echo $student["id"]; ?></td>
            <td><?php echo $student["name"]; ?></td>
            <td><?php echo $student["mail"]; ?></td>
            <td>
                <a href="show.php?id=<?php echo $student["id"]; ?>">詳細資料</a>
            </td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>
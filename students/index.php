<?php
    //* 第一種
    // require_once("conn.php");
    // $sql = "SELECT * FROM students";
    // $result = mysqli_query($conn,$sql);
    // $students = array();
    // while($row = mysqli_fetch_assoc($result)){
    //     $students[] = $row;
    // }
    //* 第二種
    require_once("conn.php");
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);
    // $students = array();
    // while($row = $result->fetch_assoc()){
    //     $students[] = $row;
    // }
    $students = $result->fetch_all(MYSQLI_ASSOC)
?>
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
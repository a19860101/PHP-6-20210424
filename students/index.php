<?php
    require_once("conn.php");
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql);
    // 
    $students = array();
    while($row = mysqli_fetch_assoc($result)){
        $students[] = $row;
    }
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
    <table>
        <tr>
            <th>#</th>
            <th>姓名</th>
            <th>MAIL</th>
            <th>性別</th>
            <th>學歷</th>
        </tr>
    <?php foreach($students as $student){ ?>
        <tr>
            <td><?php echo $student["id"]; ?></td>
            <td><?php echo $student["name"]; ?></td>
            <td><?php echo $student["mail"]; ?></td>
            <td><?php echo $student["gender"]; ?></td>
            <td><?php echo $student["edu"]; ?></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>
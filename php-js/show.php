<?php
    require_once('pdo.php');
    require_once('function.php');
    $student = show($_REQUEST);
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
    <h2>學員資料 #<?php echo $student["id"];?></h2>
    <ul>
        <li><?php echo $student["name"]; ?></li>
        <li><?php echo $student["mail"]; ?></li>
        <li><?php echo $student["edu"]; ?></li>
        <li><?php echo $student["gender"]; ?></li>
        <li><?php echo $student["skill"]; ?></li>
        <li><?php echo $student["comment"]; ?></li>
    </ul>
    <a href="index.php">學員列表</a>
    <hr>
    <a href="edit.php?id=<?php echo $student["id"]; ?>">編輯</a>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $student["id"];?>" id="del">
        <!-- <input type="submit" value="刪除" onclick="return confirm()"> -->
        <input type="submit" value="刪除">
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script>
        $(function(){

            $('form').submit(function(){
                // let data = $('#del').val();
                // console.log(data);
                // return false;
                if(confirm('確認刪除？')){
                    $.ajax({
                        url:"delete.php",
                        type: 'post',
                        data: {
                            id: $('#del').val()
                        },
                        success(){
                            location.href='index.php'
                        },
                        error(){
                            console.log('error');
                        }
                    })
                }

            })
        })
    </script>
</body>
</html>
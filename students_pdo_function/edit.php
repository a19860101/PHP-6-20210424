<?php
    require_once("pdo.php");
    extract($_REQUEST);
   
    $sql = "SELECT * FROM students WHERE id = ? ";
    $stmt = $pdo->prepare($sql);
   
    try {
        $stmt ->execute([$id]);
        $student = $stmt->fetch();
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
<div>
    <h2>編輯學員資料</h2>
    <form action="update.php" method="post">
        <div class="mb-3">
            <label for="" class="form-label">姓名</label>
            <input type="text" class="form-control" name="name" value="<?php echo $student["name"]; ?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">MAIL</label>
            <input type="text" class="form-control" name="mail" value="<?php echo $student["mail"]; ?>">
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">性別</label>
            <input type="radio" name="gender" value="男" id="male" class="form-check-input" <?php echo $student["gender"] == "男" ? "checked":""; ?>>
            <label for="male"  class="form-check-label">男</label>
            <input type="radio" name="gender" value="女" id="female" class="form-check-input" <?php echo $student["gender"] == "女" ? "checked":""; ?>>
            <label for="female" class="form-check-label">女</label>
        </div>
        <div class="mb-3">
            <label for="edu" class="form-label">學歷</label>
            <select name="edu" id="edu" class="form-select">
                <option value="國小" <?php echo $student["edu"]=="國小"?"selected":""; ?>>國小</option>
                <option value="國中" <?php echo $student["edu"]=="國中"?"selected":""; ?>>國中</option>
                <option value="高中職" <?php echo $student["edu"]=="高中職"?"selected":""; ?>>高中職</option>
                <option value="大專院校" <?php echo $student["edu"]=="大專院校"?"selected":""; ?>>大專院校</option>
                <option value="研究所以上" <?php echo $student["edu"]=="研究所以上"?"selected":""; ?>>研究所以上</option>
            </select>
        </div>
        <div class="mb-3">
            <?php
                $skills = explode(",",$student["skill"]);
            ?>
            <label for="" class="form-label">專長</label>
            <input type="checkbox" name="skill[]" class="form-check-input" value="平面設計" <?php echo in_array("平面設計",$skills)?"checked":""; ?>>
            <label for="" class="form-check-label">平面設計</label>
            <input type="checkbox" name="skill[]" class="form-check-input" value="網頁設計" <?php echo in_array("網頁設計",$skills)?"checked":""; ?>>
            <label for="" class="form-check-label">網頁設計</label>
            <input type="checkbox" name="skill[]" class="form-check-input" value="影視剪輯" <?php echo in_array("影視剪輯",$skills)?"checked":""; ?>>
            <label for="" class="form-check-label">影視剪輯</label>
            <input type="checkbox" name="skill[]" class="form-check-input" value="3D動畫" <?php echo in_array("3D動畫",$skills)?"checked":""; ?>>
            <label for="" class="form-check-label">3D動畫</label>
        </div>
        <div class="mb-3">
            <label for="comment" class="form-label">備註</label>
            <textarea name="comment" id="comment" cols="30" rows="10" class="form-control"><?php echo $student["comment"];?></textarea>
        </div>
        <input type="hidden" name="id" value="<?php echo $student["id"];?>">
        <input type="submit" value="儲存" class='btn btn-primary'>
        <input type="button" value="取消" onclick="history.back()">
    </form>
</div>
</body>
</html>
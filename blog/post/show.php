<?php
    require_once("../pdo.php");
    require_once("function.php");
    $post = showPost($_REQUEST);
?>
<?php include("../template/header.php"); ?>
<?php include("../template/nav.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-10">
            <h2><?php echo $post["title"];?></h2>
            <hr>
    
            <div class=" my-3">
                <?php echo $post["content"];?>
            </div>

            <div>
                最後更新時間:<?php echo $post["updated_at"];?>
            </div>
            <hr>
            <a href="index.php" class="btn btn-success">文章列表</a>
            <a href="edit.php?id=<?php echo $post["id"];?>" class="btn btn-info">編輯文章</a>
            <form action="delete.php" method="post" class="d-inline-block">
                <input type="hidden" name="id" value="<?php echo $post["id"];?>">
                <input type="submit" value="刪除文章" class="btn btn-danger" onclick="return confirm('確認刪除？')">
            </form>
        </div>

    </div>
</div>
<?php include("../template/footer.php"); ?>
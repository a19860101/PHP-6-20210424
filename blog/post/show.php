<?php
    require_once("../pdo.php");
    require_once("function.php");
    $post = showPost($_REQUEST);
?>
<?php include("../template/header.php"); ?>
<?php include("../template/nav.php"); ?>
<style>
    header {
        height: 200px;
    }
    header img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
</style>
<header>
    <?php if($post["cover"] != ""){ ?>
        <img src="images/<?php echo $post["cover"];?>" alt="">
    <?php }else{?>
        <img src="images/question-marks.jpg" alt="">
    <?php } ?>
</header>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-10">
            <h2><?php echo $post["title"];?></h2>
            <div class="my-3">
                作者:<?php echo $post["user"]; ?>
                <br>
                分類:<?php echo $post["c_title"];?>
            </div>
            <hr>
            
            <div class=" my-3">
                <?php echo $post["content"];?>
            </div>

            <div>
                最後更新時間:<?php echo $post["updated_at"];?>
            </div>
            <hr>
            <a href="index.php" class="btn btn-success">文章列表</a>
            <?php if(isset($_SESSION["AUTH"])){ ?>
                <?php if($post["user_id"] == $_SESSION["AUTH"]["id"]){ ?>
                <a href="edit.php?id=<?php echo $post["id"];?>" class="btn btn-info">編輯文章</a>
                <form action="delete.php" method="post" class="d-inline-block">
                    <input type="hidden" name="id" value="<?php echo $post["id"];?>">
                    <input type="submit" value="刪除文章" class="btn btn-danger" onclick="return confirm('確認刪除？')">
                </form>
                <?php } ?>
            <?php } ?>
        </div>

    </div>
</div>
<?php include("../template/footer.php"); ?>
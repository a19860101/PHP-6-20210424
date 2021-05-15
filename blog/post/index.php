<?php
    require_once("../pdo.php");
    require_once("function.php");
    $posts = showAllPosts();
?>
<?php include("../template/header.php"); ?>
<?php include("../template/nav.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-10">
            <h2>文章列表</h2>
            <hr>
        </div>
        <?php foreach($posts as $post){ ?>
        <div class="col-xl-8 col-10">
            <h3><?php echo $post["title"];?></h3>
            <div>
                <?php echo $post["content"];?>
            </div>
            <div>
                最後更新時間:<?php echo $post["updated_at"];?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include("../template/footer.php"); ?>


    
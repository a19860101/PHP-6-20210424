<?php
    require_once("../pdo.php");
    require_once("function.php");
    if(isset($_REQUEST["category_id"])){
        $posts = showPostWithCategory($_REQUEST);
        $title = "分類";
    }
    if(isset($_REQUEST["user_id"])){
        $posts = showPostWithUser($_REQUEST);
        $title = "作者";
    }
?>
<?php include("../template/header.php"); ?>
<?php include("../template/nav.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-10">
            <h2><?php echo $title; ?></h2>
            <hr>
        </div>
        <?php foreach($posts as $post){ ?>
        <div class="col-xl-8 col-10 border border-secondary p-4 my-3 rounded">
            <h3><?php echo $post["title"];?></h3>
            <div class="text-end">
                <a href="show.php?id=<?php echo $post["id"];?>" class="btn btn-primary">繼續閱讀</a>
            </div>
            <div>
                最後更新時間:<?php echo $post["updated_at"];?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include("../template/footer.php"); ?>
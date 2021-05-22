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
        <div class="col-xl-8 col-10 border border-secondary p-4 my-3 rounded">
            <h3><?php echo $post["title"];?></h3>
            <div class="my-3">
                作者<a href="toxonomies.php?user_id=<?php echo $post["user_id"];?>">:<?php echo $post["user"]; ?></a>
                <br>
                分類:
                    <a href="toxonomies.php?category_id=<?php echo $post["category_id"];?>"><?php echo $post["c_title"];?></a>
            </div>
            <div class="my-3">
                <?php
                    $content = strip_tags($post["content"]);
                    echo mb_substr($content,0,100);
                ?>...
            </div>
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


    
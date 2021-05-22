<?php
    require_once("../pdo.php");
    require_once("function.php");
    $posts = showAllPosts();
?>
<?php include("../template/header.php"); ?>
<?php include("../template/nav.php"); ?>
<style>
    .cover {
        width: 100%;
        height: 300px;
    }
    .cover img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
</style>
<div class="container my-5">
    <div class="row justify-content-center  g-0">
        <div class="col-xl-8 col-10">
            <form action="search.php" class="row g-0" method="get">
                <div class="mb-3 col-10">
                    <input type="text" class="form-control" placeholder="請輸入要搜尋的內容">
                </div>
                <div class="text-end col-2">
                    <input type="submit" value="搜尋" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-10">
            <h2>文章列表</h2>
            <hr>
        </div>
        <?php foreach($posts as $post){ ?>
        <div class="col-xl-8 col-10 border border-secondary p-4 my-3 rounded">
            <h3><?php echo $post["title"];?></h3>
            <div class="cover">
                <?php if($post["cover"] != ""){ ?>
                <img src="images/<?php echo $post["cover"];?>" alt="">
                <?php }else{?>
                    <img src="images/question-marks.jpg" alt="">
                <?php } ?>

            </div>
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


    
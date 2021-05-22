<?php
        require_once("../pdo.php");
        require_once("function.php");
        $post = editPost($_REQUEST);
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
            <h2>編輯文章</h2>
            <hr>
        </div>
        <div class="col-xl-8 col-10">
            <form action="update.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">文章標題</label>
                    <input type="text" class="form-control" name="title" value="<?php echo $post["title"];?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">文章內容</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"><?php echo $post["content"];?></textarea>
                </div>
                <input type="hidden" value="<?php echo $post["id"];?>" name="id">
                <input type="submit" value="儲存" class="btn btn-primary">
                <input type="button" value="取消" class="btn btn-danger" onclick="history.back()">
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#content',
        language: 'zh_TW',
        height: '500px'
    })
</script>
<?php include("../template/footer.php"); ?>
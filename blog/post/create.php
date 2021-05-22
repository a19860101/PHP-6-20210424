<?php
    require_once("../pdo.php");
    require_once("function.php");
    $categories = createPost();
?>
<?php include("../template/header.php"); ?>
<?php include("../template/nav.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-10">
            <h2>新增文章</h2>
            <hr>
        </div>
        <div class="col-xl-8 col-10">
            <form action="store.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="" class="form-label">文章標題</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="mb-3">
                    <label for="form-label">封面圖片</label>
                    <input type="file" name="cover">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">文章分類</label>
                    <select name="category_id" id="" class="form-control">
                        <?php foreach($categories as $cate){ ?>
                        <option value="<?php echo $cate["id"];?>"><?php echo $cate["title"];?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">文章內容</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <input type="submit" value="新增" class="btn btn-primary">
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
        height: '500px',
        plugins: 'image code link lists',
        toolbar: 'removeformat | image code link | styleselect bullist numlist | bold italic forecolor underline strikethrough | alignleft aligncenter alignright',
    })
</script>
<?php include("../template/footer.php"); ?>
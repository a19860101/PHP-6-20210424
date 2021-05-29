<?php
    require_once("../pdo.php");
    require_once("function.php");
    $categories = createPost();
?>
<?php include("../template/header.php"); ?>
<?php include("../template/nav.php"); ?>
<style>
    .gallery label {
        display: inline-block;
        width: 200px;
        height: 150px;
        margin: 5px;
        cursor: pointer;
        border: 5px solid #fff;
    }

    .gallery label img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        
    }
    .gallery .img {
        display: none;
        
    }
    .img:checked + label{
        border: 5px solid #f00;
    }
    .gallery {
        display: none;
    }
    .gallery-overlay {
        position: fixed;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,.8);
        top: 0;
        left: 0;
    }
    .gallery-container {
        position: fixed;
        background-color: #fff;
        width: 90%;
        left: 50%;
        top: 10%;
        height: 80%;
        transform: translateX(-50%);
        padding: 30px;
        z-index: 9999;
    }
</style>
<div class="container my-5">
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
                    <!-- <input type="file" name="cover"> -->
                    <?php if(isset($_GET["img"])){ ?>
                        <input type="hidden" value="<?php echo $_GET["img"]; ?>" name="cover">
                        <img src="<?php echo $_GET["img"]; ?>" width="200">
                        <a href="#" id="selectImg">切換圖片</a>
                    <?php }else{ ?>
                        <a href="#" id="selectImg">選擇圖片</a>
                        <input type="hidden" value="" name="cover">
                    <?php } ?>
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
<div class="gallery" 
    <?php if(isset($_GET["gallery"])){ ?> 
        style="display:block" 
    <?php } ?>>
    <div class="gallery-overlay"></div>
    <div class="gallery-container">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="img">
            <input type="submit" value="上傳圖片">
        </form>
        <hr>
        <?php 
            $galleries = glob("images/*.{jpeg,jpg,png,gif,webp,JPG}",GLOB_BRACE);
            foreach($galleries as $g){
        ?>
        <input type="radio" name="img" id="<?php echo $g; ?>" value="<?php echo $g; ?>" class="img">
        <label for="<?php echo $g; ?>">
            <img src="<?php echo $g; ?>" width="200">
        </label>
        <form action="deleteCover.php" class="d-inline-block">
            <input type="hidden" value="<?php echo $g; ?>" name="img">
            <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
        </form>
        
        <?php } ?>
        <hr>
        <a href="#" class="selected">送出</a>
        <a href="#" class="cancel">取消</a>
    </div>
</div>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script>
    tinymce.init({
        selector: '#content',
        language: 'zh_TW',
        height: '500px',
        plugins: 'image code link lists',
        toolbar: 'removeformat | image code link | styleselect bullist numlist | bold italic forecolor underline strikethrough | alignleft aligncenter alignright',
        image_title: true,
        automatic_uploads: true,
        images_upload_url: 'postAcceptor.php',
        file_picker_types: 'image',
        /* and here's our custom image picker*/
        file_picker_callback: function (cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function () {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function () {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);
                cb(blobInfo.blobUri(), { title: file.name });
            };
            reader.readAsDataURL(file);
            };

            input.click();
        },    
    })
    $(function(){
        $('#selectImg').click(function(){
            $('.gallery').show();
        })
        $('.selected').click(function(){
            $.ajax({
                url:'create.php',
                type:'get',
                data: {
                    img: $('.img:checked').val()
                },
                success(){
                    console.log(this.url)
                    location.href = this.url;
                    $('.gallery').hide();
                },
                error(){

                }
            })
        })
        $('.cancel').click(function(){
            $('.gallery').hide();
        })
    })
</script>
<?php include("../template/footer.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        label {
            display: inline-block;
            width: 100px;
            height: 80px;
            margin: 5px;
            cursor: pointer;
            border: 5px solid #fff;
        }

        label img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
           
        }
        .img {
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
            position: absolute;
            background-color: #fff;
            width: 90%;
            left: 50%;
            transform: translateX(-50%);
            padding: 30px;
        }

    </style>
</head>
<body>
    <form action="">
        <?php if(isset($_GET["img"])){ ?>
            <input type="hidden" value="<?php echo $_GET["img"]; ?>">
            <img src="<?php echo $_GET["img"]; ?>" width="200">
            <a href="#" id="selectImg">切換圖片</a>
        <?php }else{ ?>
            <a href="#" id="selectImg">選擇圖片</a>
            <input type="hidden" value="">
        <?php } ?>
    </form>
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
            <?php } ?>
            <hr>
            <a href="#" class="selected">送出</a>
            <a href="#" class="cancel">取消</a>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script>
        $(function(){
            $('#selectImg').click(function(){
                $('.gallery').show();
            })
            $('.selected').click(function(){
                $.ajax({
                    url:'index.php',
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
</body>
</html>
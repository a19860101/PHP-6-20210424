<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">

        <a href="#">選擇圖片</a>

    </form>
    <div class="gallery">
        <div class="gallery-overlay"></div>
        <div class="gallery-container">
            <?php 
                $galleries = glob("images/*.{jpeg,jpg,png,gif,webp,JPG}",GLOB_BRACE);
                foreach($galleries as $g){
            ?>
            <img src="<?php echo $g; ?>" width="200">
            <?php } ?>
        </div>
    </div>
</body>
</html>
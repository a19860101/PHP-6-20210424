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
            width: 200px;
            height: 150px;
        }

        label img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
    </style>
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
            <label for="<?php echo $g; ?>">
                <img src="<?php echo $g; ?>" width="200">
                <input type="radio" name="img" id="<?php echo $g; ?>" value="<?php echo $g; ?>">
            </label>
            <?php } ?>
            <hr>
            <a href="#">送出</a>
        </div>
    </div>
</body>
</html>
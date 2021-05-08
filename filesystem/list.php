<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $imgs = glob('images/*');
        foreach($imgs as $img){
    ?>
        <div>
            <img src="<?php echo $img; ?>" width="200">
        </div>
    <?php } ?>
</body>
</html>
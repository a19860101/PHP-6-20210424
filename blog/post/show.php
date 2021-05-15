<?php
    require_once("../pdo.php");
    require_once("function.php");
    $post = showPost($_REQUEST);
?>
<?php include("../template/header.php"); ?>
<?php include("../template/nav.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-10">
            <h2><?php echo $post["title"];?></h2>
            <hr>
    
            <div class=" my-3">
                <?php echo $post["content"];?>
            </div>

            <div>
                最後更新時間:<?php echo $post["updated_at"];?>
            </div>
        </div>
    </div>
</div>
<?php include("../template/footer.php"); ?>
<?php 
    require_once("../pdo.php");
    require_once("function.php");

    $search = search($_REQUEST);
    $num = count($search);
?>
<?php include("../template/header.php"); ?>
<?php include("../template/nav.php"); ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-10">
            <h2>"<?php echo $_REQUEST["search"]?>" 搜尋結果</h2>
            <hr>
            <?php ?>
        </div>
        <?php if($num == 0){ ?>
        <div class="col-xl-8 col-10">
            <h3>找不到喔!!</h3>
        </div>
        <?php }?>
        <div class="col-xl-8 col-10">
            <h4>共<?php echo $num; ?>篇文章</h4>
        </div>
        <?php foreach($search as $post){ ?>
        <div class="col-xl-8 col-10 border border-secondary p-4 my-3 rounded">
            <h3><?php echo $post["title"];?></h3>
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
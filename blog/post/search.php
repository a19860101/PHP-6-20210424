<?php 
    require_once("../pdo.php");
    require_once("function.php");

    $search = search($_REQUEST);

    var_dump($search);
?>
<?php include("../template/header.php"); ?>
<?php include("../template/nav.php"); ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-10">
            <h2>搜尋結果</h2>
            <hr>
            <?php ?>
        </div>
    </div>
</div>
<?php include("../template/footer.php"); ?>
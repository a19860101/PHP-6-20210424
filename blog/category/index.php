<?php
    require_once("../pdo.php");
    require_once("function.php");

    if(isset($_POST["submit"])){
        storeCategory($_REQUEST);
        // header("location:index.php");
    }

    $categories = showAllCategories();

?>
<?php include("../template/header.php"); ?>
<?php include("../template/nav.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>新增分類</h2>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">分類標題</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">分類英文標題</label>
                    <input type="text" name="slug" class="form-control">
                </div>
                <input type="submit" value="新增分類" name="submit" class="btn btn-primary">
            </form>
        </div>
        <div class="col-4">
            <h2 class="mb-4">分類列表</h2>
            <ul class="list-group">
                <?php foreach($categories as $cate){ ?>
                <li class="list-group-item">
                    <?php echo $cate["title"]; ?>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<?php include("../template/footer.php"); ?>
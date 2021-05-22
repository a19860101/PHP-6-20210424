<?php
    require_once("../pdo.php");
    require_once("function.php");
    accessDeniedAdmin();
    if(isset($_POST["submit"])){
        storeCategory($_REQUEST);
    }
    if(isset($_POST["delete"])){
        deleteCategory($_REQUEST);
    }

    $categories = showAllCategories();

?>
<?php include("../template/header.php"); ?>
<?php include("../template/nav.php"); ?>
<div class="container my-5">
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
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $cate["title"]; ?>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $cate["id"];?>">
                        <input type="submit" name="delete" value="刪除" class="btn btn-danger" onclick="return confirm('確認刪除？')">
                    </form>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<?php include("../template/footer.php"); ?>
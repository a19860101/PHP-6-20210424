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
                <input type="submit" value="新增分類" class="btn btn-primary">
            </form>
        </div>
        <div class="col-4">
            <h2 class="mb-4">分類列表</h2>
            <ul class="list-group">
                <li class="list-group-item">
                    分類
                </li>
                <li class="list-group-item">
                    分類
                </li>
                <li class="list-group-item">
                    分類
                </li>
            </ul>
        </div>
    </div>
</div>
<?php include("../template/footer.php"); ?>
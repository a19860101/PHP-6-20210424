<?php include("../template/header.php"); ?>
<?php include("../template/nav.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 bg-light border p-5 rounded">
        <h1>會員登入</h1>
            <form action="store.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">帳號</label>
                    <input type="text" name="user" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">密碼</label>
                    <input type="password" name="pw" class="form-control">
                </div>
                <input type="submit" value="註冊會員" name="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
<?php include("../template/footer.php"); ?>
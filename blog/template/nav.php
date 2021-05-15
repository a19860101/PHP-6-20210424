<?php
    $webroot = "http://localhost/php-6-20210424/blog";
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if(isset($_SESSION["AUTH"])){ ?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $webroot;?>/post/create.php">新增文章</a>
                </li>
                <?php } ?>
            </ul>
            <ul class="navbar-nav ms-auto">
                <?php if(!isset($_SESSION["AUTH"])){ ?>
                <li class="nav-item mx-1">
                    <a href="<?php echo $webroot;?>/auth/login.php" class="btn btn-primary">登入</a>
                </li>
                <li class="nav-item mx-1">
                    <a href="<?php echo $webroot;?>/auth/register.php" class="btn btn-success">註冊</a>
                </li>
                <?php } ?>
                <?php if(isset($_SESSION["AUTH"])){ ?>
                <li class="nav-item mx-1">
                    <a href="#" class="btn btn-link disabled"><?php echo $_SESSION["AUTH"]["user"];?>你好</a>
                </li>
                <li class="nav-item mx-1">
                    <a href="<?php echo $webroot;?>/auth/logout.php" class="btn btn-danger">登出</a>
                </li>
                <?php } ?>
            </ul>
            
        </div>
    </div>
</nav>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2>POST</h2>
                <form action="response.php" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">姓名</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">MAIL</label>
                        <input type="text" class="form-control" name="mail">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">性別</label>
                        <input type="radio" name="gender" value="男" id="male" class="form-check-input">
                        <label for="male"  class="form-check-label">男</label>
                        <input type="radio" name="gender" value="女" id="female" class="form-check-input">
                        <label for="female" class="form-check-label">女</label>
                    </div>
                    <div class="mb-3">
                        <label for="edu" class="form-label">學歷</label>
                        <select name="edu" id="edu" class="form-select">
                            <option value="國小">國小</option>
                            <option value="國中">國中</option>
                            <option value="高中職">高中職</option>
                            <option value="大專院校">大專院校</option>
                            <option value="研究所以上">研究所以上</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">專長</label>
                        <input type="checkbox" name="skill[]" class="form-check-input" value="平面設計">
                        <label for="" class="form-check-label">平面設計</label>
                        <input type="checkbox" name="skill[]" class="form-check-input" value="網頁設計">
                        <label for="" class="form-check-label">網頁設計</label>
                        <input type="checkbox" name="skill[]" class="form-check-input" value="影視剪輯">
                        <label for="" class="form-check-label">影視剪輯</label>
                        <input type="checkbox" name="skill[]" class="form-check-input" value="3D動畫">
                        <label for="" class="form-check-label">3D動畫</label>
                    </div>
                    <input type="submit" value="送出" class='btn btn-primary'>
                </form>
            </div>
            <div class="col-8">
                <h2>GET</h2>
                <form action="response.php" method="get">
                    <div class="mb-3">
                        <label for="" class="form-label">姓名</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">MAIL</label>
                        <input type="text" class="form-control" name="mail">
                    </div>
                    <input type="submit" value="送出" class='btn btn-primary'>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dangki.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Form dang ky</title>
</head>
<body>
    <div id="wrapper">
        <form action="dangki.php" id="form-login" method="POST">
            <h1 class="form-heading">Đăng Ký</h1>
            <div class="form-group">
                <i class="far fa-user">:</i>
                <input type="text" class="form-input" placeholder="Tên đăng nhập" name="username" required>
            </div>
            <div class="form-group">
                <i class="far fa-key">:</i>
                <input type="password" class="form-input" placeholder="Mật khẩu" name="password" required>
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <div class="form-group">
                <i class="far fa-address-book">:</i>
                    <input type="text" class="form-input" placeholder="Địa chỉ" name="address"required>
            </div>
            <div class="form-group">
                <i class="far fa-phone">:</i>
                    <input type="text" class="form-input" placeholder="Số điện thoại" name="phonenumber" required>
            </div>
            <input type="submit" value="Đăng ký" class="form-submit" name="submit">
            <div id="login">
                <a href="../login/login.php">Đăng nhập</a> 
            </div>
        </form>
        </div>
    </div>
    <?php require 'xuly.php';?>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js">
</script>
<script src="dangki.js"></script>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Form Login</title>
</head>
<body>
    <div id="wrapper">
        <form action="lg.php" id="form-login" method="post">
            <h1 class="form-heading">Đăng Nhập</h1>
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
            <div class="form-group">
                <i class="far fa-user">:</i>
                <input type="text" class="form-input" placeholder="Tên đăng nhập" name="uname">
            </div>
            <div class="form-group">
                <i class="far fa-key"></i>
                <input type="password" class="form-input" placeholder="Mật khẩu" name="password">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <input type="submit" value="Đăng nhập" class="form-submit">
            <div class="lienket">
                <a href="../dangki/dangki.php">Đăng ký</a>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js">
</script>
<script src="app.js"></script>
</html>
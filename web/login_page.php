<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
<?php
    $showLogin = true;
    if(isset($_COOKIE['status'])){
        switch ($_COOKIE['status']){
            case 'false':
                echo '帳號密碼錯誤';
            break;
            case 'NULL':
                echo '沒有輸入';
            break;
            case true:
                echo '已經登入';
                $showLogin = false;
            break;
        }
    }
?>
    <?php
    if($showLogin){
    ?>
    <div class="sign-in-box">
        <div class="info"><h1>會員登入</h1></div>
    <form action="login_process.php" method="POST">
        <div><span>電子信箱：</span><input type="text" name="email" value='aa@g.com'></div>
        <div><span>密　　碼：</span><input type="text" name="password" value='111111'></div>
        <div class="btn">
        <a href="register.php">註冊</a>
        <input type="submit" value="登入">
        </div>
    </form>
    </div>
    <?php
    }else{ ?>
    <a href="logout.php" style="text-align:center"><h1>登出</h1></a>
    <?php } ?>
    </div>
</body>
</html>
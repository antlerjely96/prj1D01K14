<?php
    //Cho phép làm việc với session
    session_start();
    //Kiểm tra tồn tại email trên session hay chưa, nếu đã tồn tại thì cho nhảy sang trang khác
    if(isset($_SESSION['email'])){
        //Sang trang danh sách lớp
        header("Location:../classes/index.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form method="post" action="loginProcess.php">
        Email: <input type="email" name="email"><br>
        Password: <input type="password" name="password"><br>
        <button>Login</button>
    </form>
</body>
</html>
<?php
    //Cho phép làm việc với Session
    session_start();
    //Lấy dữ liệu email, pwd từ form login
    $email = $_POST['email'];
    $password = $_POST['password'];
    //Mở kết nối
    include_once '../connect/open.php';
    //Viết query
    $sql = "SELECT *, COUNT(id) AS count_account FROM admins WHERE email = '$email' AND password = '$password'";
    //Chạy query
    $accounts = mysqli_query($connect, $sql);
    //Đóng kết nối
    include_once '../connect/close.php';
    //Kiểm tra query trả về bao nhiêu bản ghi, nếu trả về 0 thì login sai, nếu trả 1 là login đúng
    foreach ($accounts as $account){
        $id = $account['id'];
        $count_account = $account['count_account'];
    }
    if($count_account == 0){
        //Quay lại trang login
        header("Location:login.php");
    } else {
        //Lưu id, email lên session
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
        //Sang trang danh sách lớp
        header("Location:../classes/index.php");
    }
?>
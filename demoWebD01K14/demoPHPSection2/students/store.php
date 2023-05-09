<?php
    //Lấy dữ liệu từ form
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $class_id = $_POST['class_id'];
    //Mở kết nối
    include_once '../connect/open.php';
    //Viết query
    $sql = "INSERT INTO students(name, phone, email, gender, class_id) VALUES ('$name', '$phone', '$email', '$gender', $class_id)";
    //Chạy query
    mysqli_query($connect, $sql);
    //Đóng kết nối
    include_once '../connect/close.php';
    //Quay về trang danh sách
    header("Location:index.php");
?>
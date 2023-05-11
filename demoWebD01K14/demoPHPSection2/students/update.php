<?php
    //Lấy dữ liệu
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $class_id = $_POST['class_id'];
    //Mở kết nối
    include_once '../connect/open.php';
    //Query để update dữ liệu
    $sql = "UPDATE students SET name = '$name', phone = '$phone', email = '$email', gender = '$gender', class_id = '$class_id' WHERE id = '$id'";
    //Chạy query
    mysqli_query($connect, $sql);
    //Quay về trang danh sách
    header('Location:index.php');
?>
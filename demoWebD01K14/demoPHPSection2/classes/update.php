<?php
    //Lấy dữ liệu mới để update vào db
    $id = $_POST['id'];
    $name = $_POST['name'];
    //Mở kết nối
    include_once '../connect/open.php';
    //Viết query update dữ liệu
    $sql = "UPDATE classes SET name = '$name' WHERE id = '$id'";
    //Chạy query
    mysqli_query($connect, $sql);
    //Đóng kết nối
    include_once '../connect/close.php';
    //Quay về trang danh sách
    header('Location:index.php');
?>
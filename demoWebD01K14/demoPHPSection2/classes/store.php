<?php
    //Lấy dữ liệu ở ô input có name='name'
    $name = $_POST['name'];
    //Mở kết nối
    include_once '../connect/open.php';
    //Query để thêm dữ liệu lên db
    $sql = "INSERT INTO classes(name) VALUES ('$name')";
    //Chạy query
    mysqli_query($connect, $sql);
    //quay về trang hiển thị danh sách
    header('Location:index.php');
?>
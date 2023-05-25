<?php
    //Lấy dữ liệu
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $class_id = $_POST['class_id'];
    //Lấy tên ảnh
    $image = $_FILES['image']['name'];
    //Mở kết nối
    include_once '../connect/open.php';
    //Query để update dữ liệu
    $sql = "UPDATE students SET name = '$name', phone = '$phone', email = '$email', gender = '$gender', image = '$image', class_id = '$class_id' WHERE id = '$id'";
    //Chạy query
    mysqli_query($connect, $sql);
    //Kiểm tra ảnh đã tồn tại trong folder chưa
    if(!file_exists('../image/' . $image)){
        //Lấy path của ảnh
        $path = $_FILES['image']['tmp_name'];
        //Lưu ảnh
        move_uploaded_file($path, '../image/' . $image);
    }
    //Quay về trang danh sách
    header('Location:index.php');
?>
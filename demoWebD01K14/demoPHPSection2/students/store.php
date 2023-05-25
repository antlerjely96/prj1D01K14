<?php
    //Lấy dữ liệu từ form
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $class_id = $_POST['class_id'];
    //Lấy tên ảnh
    $image = $_FILES['image']['name'];
    //Mở kết nối
    include_once '../connect/open.php';
    //Viết query lưu thông tin (đối với ảnh sẽ lưu tên trên db)
    $sql = "INSERT INTO students(name, phone, email, gender, image, class_id) VALUES ('$name', '$phone', '$email', '$gender', '$image', $class_id)";
    //Chạy query
    mysqli_query($connect, $sql);
    //Đóng kết nối
    include_once '../connect/close.php';
    //Lưu ảnh từ vị trí hiện tại của ảnh vào thư mục image
    //Kiểm tra ảnh đã tồn tại hay chưa
    if(!file_exists("../image/" . $image)){
        //Lấy được đường dẫn hiện tại của ảnh
        $path = $_FILES['image']['tmp_name'];
        //Lưu ảnh từ đường dẫn hiện tại vào folder
        move_uploaded_file($path, "../image/" . $image);
    }
    //Quay về trang danh sách
    header("Location:index.php");
?>
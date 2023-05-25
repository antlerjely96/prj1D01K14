<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    //Lấy id của bản ghi đang cần sửa
    $id = $_GET['id'];
    //Mở kết nối
    include_once '../connect/open.php';
    //Query lấy dữ liệu ở bảng PK (bảng classes)
    $sql = "SELECT * FROM classes";
    //Chạy query
    $classes = mysqli_query($connect, $sql);
    //Query lấy dữ liệu của bản ghi đang được update (bản ghi ở bảng students)
    $sqlSelectStudents = "SELECT * FROM students WHERE id = '$id'";
    //Chạy query
    $students = mysqli_query($connect, $sqlSelectStudents);
    //Đóng kết nối
    include_once '../connect/close.php';

?>
    <form method="post" action="update.php" enctype="multipart/form-data">
        <?php
            //Đổ dữ liệu bản ghi trước khi sửa
            foreach ($students as $student){
        ?>
            <input type="hidden" name="id" value="<?= $student['id'] ?>">
            Name: <input type="text" name="name" value="<?= $student['name'] ?>"><br>
            Phone: <input type="text" name="phone" value="<?= $student['phone'] ?>"><br>
            Email: <input type="email" name="email" value="<?= $student['email'] ?>"><br>
            Gender: <input type="radio" name="gender" value="0" checked> Female
                    <input type="radio" name="gender" value="1"
                        <?php
                            //Kiểm tra nếu gender = 1 thì checked vào đây
                            if($student['gender'] == 1){
                                echo 'checked';
                            }
                        ?>
                    > Male <br>
            Image: <input type="file" name="image" value="<?= $student['image'] ?>">
                    <img src="../image/<?= $student['image'] ?>">
                    <br>
            Class: <select name="class_id">
                <option> - Choose -</option>
                <?php
                    //Đổ dữ liệu của classes
                    foreach ($classes as $class){
                ?>
                        <option value="<?= $class['id'] ?>"
                            <?php
                                //Kiểm tra xem class_id của bản ghi trùng với id của class nào thì sẽ selected vào class đó
                                if($student['class_id'] == $class['id']){
                                    echo 'selected';
                                }
                            ?>
                        >
                            <?= $class['name'] ?>
                        </option>
                <?php
                    }
                ?>
            </select><br>
        <?php
            }
        ?>
        <button>Update</button>
    </form>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update a class</title>
</head>
<body>
    <?php
        //Nhúng header vào
        include_once '../layout/header.php';
        //Lấy id của bản ghi cần update từ trên URL về
        $id = $_GET['id'];
        //Mở kết nối
        include_once '../connect/open.php';
        //Query lấy bản ghi đang cần update
        $sql = "SELECT * FROM classes WHERE id = '$id'";
        //Chạy query
        $classes = mysqli_query($connect, $sql);
        //Đóng kết nối
        include_once '../connect/close.php';
        foreach ($classes as $class){
    ?>
        <form method="post" action="update.php">
            <input type="hidden" name="id" value="<?= $class['id'] ?>">
            Name: <input type="text" name="name" value="<?= $class['name'] ?>"><br>
            <button>Update</button>
        </form>
    <?php
        }
        //Nhúng footer vào
        include_once '../layout/footer.php';
    ?>
</body>
</html>
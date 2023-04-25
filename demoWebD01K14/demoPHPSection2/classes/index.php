<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List's Classes</title>
</head>
<body>
    <?php
        //Nhúng file open.php để mở kết nối
        include_once '../connect/open.php';
        //Query để lấy dữ liệu từ bảng classes trên db về
        $sql = "SELECT * FROM classes";
        //Chạy query
        $classes = mysqli_query($connect, $sql);
        //Đóng kết nối
        include_once '../connect/close.php';
    ?>
        <table border="1px" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
            <?php
                //Hiển thị dữ liệu
                foreach ($classes as $class){
            ?>
                <tr>
                    <td>
                        <?= $class['id'] ?>
                    </td>
                    <td>
                        <?= $class['name'] ?>
                    </td>
                </tr>
            <?php
                }
            ?>
        </table>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a student</title>
</head>
<body>
<?php
    //Mở kết nối
    include_once '../connect/open.php';
    //Query
    $sql = "SELECT * FROM classes";
    //Chạy query
    $classes = mysqli_query($connect, $sql);
    //Đóng kết nối
    include_once '../connect/close.php';
?>
    <form method="post" action="store.php" enctype="multipart/form-data">
        Name: <input type="text" name="name"><br>
        Phone: <input type="text" name="phone"><br>
        Email: <input type="email" name="email"><br>
        Gender: <input type="radio" name="gender" value="0"> Female
                <input type="radio" name="gender" value="1"> Male <br>
        Image: <input type="file" name="image"><br>
        Class: <select name="class_id">
            <option> - Choose - </option>
            <?php
                foreach ($classes as $class){
            ?>
                    <option value="<?= $class['id'] ?>">
                        <?= $class['name'] ?>
                    </option>
            <?php
                }
            ?>
        </select><br>
        <button>Add</button>
    </form>
</body>
</html>
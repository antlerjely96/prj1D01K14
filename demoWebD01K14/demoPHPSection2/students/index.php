<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student's List</title>
</head>
<body>
    <?php
        //Mở kết nối
        include_once '../connect/open.php';
        //Query
        $sql = "SELECT students.*, classes.name AS class_name FROM students
                INNER JOIN classes
                ON students.class_id = classes.id";
        //Chạy query
        $students = mysqli_query($connect, $sql);
        //Đóng kết nối
        include_once '../connect/close.php';
    ?>
        <a href="create.php">Add a student</a>
        <table border="1px" cellspacing="0" cellpadding="0" width="100%">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Image</th>
                <th>Class</th>
                <th></th>
                <th></th>
            </tr>
            <?php
                //Đổ dữ liệu vào bảng
                foreach ($students as $student){
            ?>
                <tr>
                    <td>
                        <?= $student['id'] ?>
                    </td>
                    <td>
                        <?= $student['name'] ?>
                    </td>
                    <td>
                        <?= $student['phone'] ?>
                    </td>
                    <td>
                        <?= $student['email'] ?>
                    </td>
                    <td>
                        <?php
                            if($student['gender'] == 0){
                                echo 'Female';
                            } elseif ($student['gender'] == 1){
                                echo 'Male';
                            }
                        ?>
                    </td>
                    <td>
                        <img src="../image/<?= $student['image'] ?>" width="50px" height="50px">
                    </td>
                    <td>
                        <?= $student['class_name'] ?>
                    </td>
                    <td>
                        <a href="edit.php?id=<?= $student['id'] ?>">Edit</a>
                    </td>
                    <td>
                        <a href="destroy.php?id=<?= $student['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php
                }
            ?>
        </table>
</body>
</html>
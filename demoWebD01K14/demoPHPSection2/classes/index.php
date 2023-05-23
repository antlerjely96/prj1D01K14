<?php
    //Cho phép làm việc với session
    session_start();
    //Kiểm tra đã tồn tại email trên session hay chưa, nếu chưa tồn tại thì cho quay về login
    if(!isset($_SESSION['email'])){
        //Quay về trang login
        header("Location:../admin/login.php");
    }
?>
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
        //Nhúng header vào
        include_once '../layout/header.php';
        //Nhúng file open.php để mở kết nối
        include_once '../connect/open.php';
        //Khai báo biến search
        $search = "";
        //Lấy giá trị được search về với điều kiện $_GET['search'] tồn tại
        if(isset($_GET['search'])){
            $search = $_GET['search'];
        }
        //Khai báo số bản ghi 1 trang
        $recordOnePage = 3;
        //Query để lấy số bản ghi
        $sqlCountRecord = "SELECT COUNT(*) AS count_record FROM classes WHERE name LIKE '%$search%'";
        //Chạy query lấy số bản ghi
        $countRecords = mysqli_query($connect, $sqlCountRecord);
        //foreach để lấy số bản ghi
        foreach ($countRecords as $countRecord){
            $records = $countRecord['count_record'];
        }
        //Tính số trang
        $countPage = ceil($records / $recordOnePage);
        //Lấy trang hiện tại (nếu không tồn tại page hiện tại thì page hiện tại = 1)
        $page = 1;
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        //Tính bản ghi bắt đầu của trang
        $start = ($page - 1) * $recordOnePage;
        //Query để lấy dữ liệu từ bảng classes trên db về
        $sql = "SELECT * FROM classes WHERE name LIKE '%$search%' LIMIT $start, $recordOnePage";
        //Chạy query
        $classes = mysqli_query($connect, $sql);
        //Đóng kết nối
        include_once '../connect/close.php';
    ?>
        <a href="../admin/logout.php">Logout</a><br>
        <a href="create.php">Add a class</a>
<!--        Form để search
            action để trồng tức là khi click vào button sẽ load lại chính trang này-->
        <form method="get" action="">
            Search: <input type="text" name="search" value="<?= $search; ?>"><br>
            <button>Search</button>
        </form>
        <table border="1px" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th></th>
                <th></th>
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
                    <td>
                        <!-- Gắn link nhảy sang form edit kèm theo id của bản ghi cần update trên URL-->
                        <a href="edit.php?id=<?= $class['id'] ?>">Edit</a>
                    </td>
                    <td>
                        <!-- Gắn link nhảy sang file xử lý xóa dữ liệu -->
                        <a href="destroy.php?id=<?= $class['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php
                }
            ?>
        </table>
<!--        for để hiển thị số trang-->
        <?php
            for($i = 1; $i <= $countPage; $i++){
        ?>
                <a href="?page=<?= $i ?>&search=<?= $search ?>">
                    <?= $i ?>
                </a>
        <?php
            }
        ?>
    <?php
        //Nhúng footer
        include_once '../layout/footer.php';
    ?>
</body>
</html>
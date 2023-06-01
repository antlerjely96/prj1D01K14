<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product's Detail</title>
</head>
<body>
    <?php
        //Lấy id của sp
        $id = $_GET['id'];
        //Mở kết nối
        include_once '../../connect/open.php';
        //Viết query
        $sql = "SELECT * FROM products WHERE id = '$id'";
        //Chạy query
        $products = mysqli_query($connect, $sql);
        //Đóng kết nối
        include_once '../../connect/close.php';
        foreach ($products as $product){
    ?>
            Image: <img src="../../image/<?= $product['image']; ?>" width="50px" height="50px"><br>
            Name: <?= $product['name'] ?><br>
            Price: <?= $product['price'] ?><br>
            Quantity: <?= $product['quantity'] ?><br>
    <?php
        }
    ?>
</body>
</html>
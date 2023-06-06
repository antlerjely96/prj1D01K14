<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
</head>
<body>
<form method="post" action="update-cart.php">
    <table border="1px" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td>Product ID</td>
            <td>Product name</td>
            <td>Product image</td>
            <td>Product price</td>
            <td>Product quantity</td>
            <td></td>
            <td></td>
        </tr>
        <?php
            //Mở kết nối
            include_once '../../connect/open.php';
            $count_money = 0;
            //Trong trường hợp chưa có cart ở trên session
            $carts = array();
            //Lấy cart từ session về trong trường hợp đã có cart
            if(isset($_SESSION['cart'])){
                $carts = $_SESSION['cart'];
            }
            foreach ($carts as $id => $quantity){
                //Sql lấy thông tin sp theo id
                $sql = "SELECT * FROM products WHERE id = '$id'";
                //Chạy query
                $products = mysqli_query($connect, $sql);
                foreach ($products as $product){
        ?>
                    <tr>
                        <td>
                            <?= $id; ?>
                        </td>
                        <td>
                            <?= $product['name']; ?>
                        </td>
                        <td>
                            <img src="../../image/<?= $product['image'] ?>" width="50px" height="50px">
                        </td>
                        <td>
                            <?= $product['price']; ?>
                        </td>
                        <td>
                            <input type="number" value="<?= $quantity; ?>" name="quantity[<?= $id; ?>]">
                        </td>
                        <td>
                            <?php
                                //Tính thành tiền của từng sp có trong trong cart
                                $money = $product['price'] * $quantity;
                                //Tính tổng tiền của các sp có trong trong cart
                                $count_money += $money;
                                echo $money;
                            ?>
                        </td>
                        <td>
                            <!--Link xóa 1 sản phẩm trên giỏ hàng-->
                            <a href="delete-one-product-in-cart.php?id=<?= $id ?>">Delete in cart</a>
                        </td>
                    </tr>
        <?php
                }
            }
        ?>
        <tr>
            <td colspan="7">
                Count:
                <?php
                    //Hiển thị tổng tiền của các sp có trong cart
                    echo $count_money;
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="7">
                <button>Update Cart</button>
            </td>
        </tr>
    </table>
</form>
<!--Link xóa toàn bộ sản phẩm trên giỏ hàng-->
<a href="delete-all-product-in-cart.php">Delete cart</a> <br>
<!--Link để quay về trang danh sách sản phẩm-->
<a href="../products/index.php">Product List</a>
</body>
</html>
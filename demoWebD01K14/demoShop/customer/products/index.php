<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../layout/css/all.min.css">
    <link rel="stylesheet" href="../layout/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="../layout/css/adminlte.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Product List</title>
</head>
<body>
    <?php
        include_once '../layout/header.php';
        include_once '../layout/menu.php';
    ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0">Product List</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <a href="../carts/index.php">View cart</a>
                </div>
                <div class="row">
                    <?php
                        include_once '../../connect/open.php';
                        $sql = "SELECT * FROM products";
                        $products = mysqli_query($connect, $sql);
                        include_once '../../connect/close.php';
//                        $temp = 0;
                        foreach ($products as $product){
                    ?>
                            <div class="col-1"></div>
                            <div class="col-3 shadow" style="margin-top: 10px; margin-bottom: 10px">
                                <a href="product-detail.php?id=<?= $product['id'] ?>">
                                    <img src="../../image/<?= $product['image']; ?>" width="50px" height="50px">
                                </a><br>
                                <?= $product['name'] ?><br>
                                <?= $product['price'] ?><br>
                                <a href="../carts/add-to-cart.php?id=<?= $product['id'] ?>">Add to cart</a>
                            </div>
                    <?php
//                            $temp++;
//                            echo $temp;
//                            if($temp % 3 == 0){
//                                echo "</div><div class='row'>";
//                            }
                        }
                    ?>
                </div>
            </div>
        </section>
    </div>

    <?php
        include_once '../layout/footer.php';
    ?>
</body>

<script src="../layout/js/jquery.min.js"></script>
<script src="../layout/js/bootstrap.bundle.min.js"></script>
<script src="../layout/js/jquery.overlayScrollbars.min.js"></script>
<script src="../layout/js/adminlte.js"></script>
</html>
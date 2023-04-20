<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo PHP</title>
</head>
<body>
    <p>Tính tổng các số chia hết cho 3 trong khoảng 1 đến n (n = 100)</p>
    <?php
        $n = 100;
        $tong = 0;
        for ($i = 1; $i <= 100; $i++){
            if($i % 3 == 0){
                $tong += $i;
            }
        }
        echo "Tổng các số chia hết cho 3 trong khoảng từ 1 đến n là: " . $tong;
    ?>
</body>
</html>
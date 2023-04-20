<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>demo PHP</title>
</head>
<body>
    <p>Tính tổng các số từ 1 đến 10</p>
    <?php
        $tong = 0;
        for ($i = 1; $i <= 10; $i++){
            $tong += $i;
        }
        echo "Tổng các số từ 1 đến 10: " . $tong;
    ?>
</body>
</html>
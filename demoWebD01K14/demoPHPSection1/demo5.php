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
    <p>Tính n!</p>
    <?php
        $n = 5;
        if($n < 0){
            echo "Không tồn tại n!";
        } elseif ($n <= 1){
            echo "n! = 1";
        } else {
            $giaiThua = 0;
            for ($i = 2; $i <= $n; $i++){
                $giaiThua *= $i;
            }
            echo "n! = " . $giaiThua;
        }
    ?>
</body>
</html>
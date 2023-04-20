<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>demo php</title>
</head>
<body>
    <p>Hiển thị các số nguyên tố trong khoảng 1 đến n (n = 100)</p>
    <?php
        $n = 100;
        if($n <= 1){
            echo "Không có số nguyên tố trong khoảng 1 đến n";
        } else {
            $result = "";
            for($i = 2; $i < $n; $i++){
                $temp = 0;
                for($j = 2; $j < $i; $j++){
                    if($i % $j == 0){
                        $temp++;
                    }
                }
                if($temp == 0) {
                    $result .= $i . ", ";
                }
            }
            echo $result;
        }
    ?>
</body>
</html>
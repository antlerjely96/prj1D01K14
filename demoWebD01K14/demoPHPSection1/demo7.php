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
    <p>Kiểm tra n có phải số nguyên tố không? (n = 2437)</p>
    <?php
        $n = 2437;
        if($n <= 1){
            echo "n không phải số nguyên tố";
        } else {
            $temp = 0;
            for ($i = 2; $i < $n; $i++){
                if($n % $i == 0){
                    $temp++;
                }
            }
            if($temp == 0){
                echo "n là số nguyên tố";
            } else {
                echo "n không là số nguyên tố";
            }
        }
    ?>
</body>
</html>
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
    <p>2. Kiểm tra 3 số a, b, c có phải cạnh tam giác không?</p>
    <?php
        $a = 3;
        $b = 4;
        $c = 5;
        if($a > 0 && $b > 0 && $c > 0){
            if($a + $b > $c && $b + $c > $a && $a + $c > $b){
                echo "a, b, c là 3 cạnh tam giác";
            } else {
                echo "a, b, c không là 3 cạnh tam giác";
            }
        } else {
            echo "a, b, c không là 3 cạnh tam giác";
        }
    ?>
</body>
</html>
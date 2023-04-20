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
    <p>Tính nghiệm phương trình ax<sup>2</sup> + bx + c = 0</p>
    <?php
        $a = 2;
        $b = 5;
        $c = 4;
        if($a == 0){
            if($b == 0){
                if($c == 0){
                    echo "Phương trình có vô số nghiệm";
                } else {
                    echo "Phương trình vô nghiệm";
                }
            } else {
                $x = (-$c) / $b;
                echo "Phương trình có nghiệm: " . $x;
            }
        } else {
            $delta = pow($b, 2) - 4 * $a * $c;
            if($delta < 0){
                echo "Phương trình vô nghiệm";
            } elseif ($delta == 0){
                $x = (-$b) / (2 * $a);
                echo "Phương trình có nghiệm: " . $x;
            } else {
                $x1 = (-$b + sqrt($delta)) / (2 * $a);
                $x2 = (-$b - sqrt($delta)) / (2 * $a);
                echo "Phương trình có nghiệm: x<sub>1</sub> = " . $x1 . ", x<sub>2</sub> = " . $x2;
            }
        }
    ?>
</body>
</html>
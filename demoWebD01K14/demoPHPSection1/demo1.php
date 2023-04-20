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
    <p>1. Kiểm tra n = 5 là số dương hay số âm</p>
    <?php
        $a = 5;
        $result = "";
        if($a > 0){
            $result = $a . " là số dương";
        } else if ($a < 0){
            $result = $a . " là số âm";
        } else {
            $result = $a . " là số không âm không dương";
        }
    ?>
    <p>
        Đáp án:
        <?php
            echo $result;
        ?>
    </p>
</body>
</html>

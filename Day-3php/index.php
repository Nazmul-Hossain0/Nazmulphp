<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $marks= 32;
    if($marks>= 80 && $marks <=100){
        echo " You got A+";
    }else if ($marks>=70 && $marks<=79){
         echo "You got A";
    }else if ($marks>=60 && $marks<=69){
        echo "You got A-";
    }else if ($marks>=50 && $marks<=59){
        echo "You got B";
    }else if ($marks>=40 && $marks<=49){
        echo "You got c";
    }else if ($marks>=33 && $marks<=39){
        echo "You got D";
    }else if ($marks>=0 && $marks<=32){
        echo "You got F";
    }else {
        echo "invalid Number";
    }
    ?>
</body>
</html>
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
    
    $fact=1;
    for($n=7;$n>=1;$n--){
        $fact=$fact*$n;
    }
    echo "Factorial of 7 is ",$fact;
    
    
    ?>
</body>
</html>
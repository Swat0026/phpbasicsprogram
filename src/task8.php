<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="400px">




    <?php  

    for($i=1;$i<=8;$i++){
        echo "<tr>";
        for($j=1;$j<=8;$j++){
            $sum=$i+$j;
            if($sum%2==0){
                echo "<td height=30px width=30px bgcolor=black></td>";
            }else{
                echo "<td height=30px width=30px bgcolor=white></td>";
            }
        } 

        echo "</tr>";
    }




    ?>
    </table>
    
</body>
</html>
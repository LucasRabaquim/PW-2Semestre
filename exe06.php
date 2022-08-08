<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1" width ="40%">
        
    <?php 
        $n = 1;
        do{
            if($n % 2 == 0) echo "<tr style='background-color:red'>";
            else echo "<tr style='background-color:blue'>";
    
            echo "<td width=20%>&nbsp;</td>
                  <td width=20%>&nbsp;</td>
                  </tr>";
            $n++;} while($n <= 20);?>
    
</table>
</body>
</html>
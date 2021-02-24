<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" >

    <label for="fname">start value : </label><br>
    <input type="number" id="sv" name="sv" value="sv"><br>
    <label for="lname">Last value : </label><br>
    <input type="number" id="lv" name="lv" value="lv"><br>
    <label for="div">Div : </label><br>
    <input type="number" id="div" name="div" value=""><br><br>
    <button type="submit" name="submit">Check Num</button>
</form> 

<?php
$sv = $_POST['sv'];
$lv = $_POST['lv'];
$div = $_POST['div'];

function checkNum($sv,$lv,$div){
    for ($z=$sv ; $z<=$lv ; $z++ ){
        if ($z%$div == 0){
            echo $z ." ";
        }
    }

    }
function countNum($sv,$lv,$div){
    $count = 0 ;
    for ($z=$sv ; $z<=$lv ; $z++ ){
        
        if ($z%$div == 0){
            $count ++;
        }     
    }
    echo "<br>". $count ." "; 
        
    }
function sumNum($sv,$lv,$div){
    $all = 0 ;
    for ($z=$sv ; $z<=$lv ; $z++ ){
        
        if ($z%$div == 0){
            $all += $z;
        }     
    }
    echo "<br>". $all ." "; 
}
    if (isset($_POST['submit'])){
        checkNum($sv,$lv,$div);
        countNum($sv,$lv,$div);
        sumNum($sv,$lv,$div);
}

?>

</body>
</html>
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
    function add_number(){
        echo 1+2;
    }
    
    function display_name($name){
        echo "Hello  " .$name;
    }

    function km_to_m($km=0){
        $m_scale=0.62;
        return $k*$m_scale;
    }

    function plus_number($a,$b){
        return  $a+$b;
    }
?>

<form id="form" name="form_name" method="post" action="function.php">
    <div>Nhập họ tên:<input name="name" type="text"></div>
    <div>Kết quả: <?php display_name($_POST["name"])?></div>
    <div><input type="submit"></div>
</form>

<form id="form" name="form_plusnumber" method="post" action="function.php">
    <div>Nhập số a:<input name="a" type="number"></div>
    <div>Nhập số b:<input name="b" type="number"></div>
    <div>Kết quả: <?php echo plus_number($_POST["a"],$_POST["b"])?></div>
    <div><input type="submit"></div>
</form>


</body>
</html>

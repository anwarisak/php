<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
    
</head>
<body>

<form action="" method="post">
    <input type="text" name="numberOne" id="" placeholder="enter number one">
    <input type="text" name="numberTwo" id="" placeholder="enter number two">
    
    
    <input type="submit" id="a" value="ADD" name="btn-a">

    <input type="submit" id="s" value="sub" name="btn-s">
    <input type="submit" id="m" value="mult" name="btn-m">
    <input type="submit" id="d" value="devi" name="btn-d">

    </form>


    <?php

 
if(isset($_POST['btn-a'])){

    $num1 = $_POST['numberOne'];
    $num2 = $_POST['numberTwo'];
    $add = $num1+$num2;

    echo "jawaabta waa".$add;

}

elseif(isset($_POST['btn-s'])){

    $num1 = $_POST['numberOne'];
    $num2 = $_POST['numberTwo'];
    $sub = $num1-$num2;

    echo 'jawaabta waa '.$sub;

}


elseif(isset($_POST['btn-m'])){

    $num1 = $_POST['numberOne'];
    $num2 = $_POST['numberTwo'];
    $mult = $num1*$num2;

    echo " jawaabta waa ".$mult;

}
elseif(isset($_POST['btn-d'])){

    $num1 = $_POST['numberOne'];
    $num2 = $_POST['numberTwo'];
    $devi = $num1/$num2;

    echo "jawaabta waa".$devi;

}
?>


   
</body>
</html>




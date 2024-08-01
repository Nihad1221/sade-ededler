<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
$a = "";
$b = "";
$c = "";
$dis = "";
$x1 = "";
$x2 = "";
if (isset($_POST['a'], $_POST['b'], $_POST['c'],)) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $dis = $b ** 2 - 4 * $a * $c;
}
if ($dis > 0) {
    $x1 = (-$b + sqrt($dis)) / (2 * $a);
    $x2 = (-$b - sqrt($dis)) / (2 * $a);
} elseif ($dis = 0) {
    $x1 = -$b / (2 * $a);
    $x2 = -$b / (2 * $a);
} else {
    $dis = "Həqiqi kökləri yoxdur";
    $x1 = "";
    $x2 = "";
}

?>

<form action="" method="post">
    <input type="text" value="<?php $a; ?>" name="a">
    x<sup>2</sup>
    +<input type="text" value="<?php $b; ?>" name="b">
    x+<input type="text" value="<?php $c; ?>" name="c">=0
    <button>Hesabla</button>
</form>




D = <?php echo $dis;  ?>
<br>
x<sub>1</sub>=<?php echo $x1; ?>
<br>
x1<sub>2</sub>=<?php echo $x2; ?>

</body>

</html>
<?php
echo "hello", "world";
echo"<br>";
print "Hello world";
echo"<br>";

$x = 10;
$y = 10.5;
$z = "hello";
$isTrue = true;

var_dump($x);
echo"<br>";

$cars = array("volvo", "BMW", "toyota");
echo $cars[0];

echo"<br>";

$a = 20;
$b = 30;
 
if ($a > $b) {
    echo "A is greater";
} elseif ($a == $b) {
    echo "Equal";
} else {
    echo "B is greater";
}
?>
 
Switch:
 
<?php
$color = "red";
 
switch ($color) {
    case "red":
        echo "Red selected";
        break;
    default:
        echo "Other color";
}

?>
<?php
echo PHP_VERSION ;
echo 2**10;
$x=1;
$y=10;
echo $x<=>$y;

//rowne

$x=1;
$y=1.0;

echo gettype($x); //integer;
echo gettype($y)."<br>"; // double


if ($x==$y) {
  echo " równe";
}
else {
  echo" różne";

}
//identyczne
if ($x==$y){
  echo " identyczne";

}
else {
  echo " rozne";

}
echo "<hr>";
$x=1;
echo "$x <br>" ;// 1
$x=$x++;
echo "$x"; //1
$x=++$x;
echo "$x";



?>

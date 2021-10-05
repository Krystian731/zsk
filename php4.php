<?php

 ?><!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>sredni wiek </title>
   </head>
   <body>

 </form>
 <?php
if(!isset($_POST['person']) && !isset($_POST['buttonAvg']))
{
  echo <<< form
  <h4>ilosc osob w rodzinie  </h4>
    <form method="post" >
  <input type="number" name="person" placeholder="podaj ilosc osob">
  <br>
  <input type="submit">
  </form>
form;

echo "cos";

}
if (!empty($_POST['person'])){

  echo " <h3> ilosc osob w rodzinie: $_POST[person]</h3>";
  echo <<< form
  <h4>ilosc osob w rodzinie </h4>
  <form method="post">
  form;
    for ($i=0; $i< $_POST['person'] ; $i++) {
       echo '<input type="number" name="person" placeholder="podaj wiek  osob "><br>';
    }

  echo <<< form
  <input type="submit">
  </form>
  form;

}
if(isset($_POST['buttonAvg'])){
  $avg = 0;
  foreach ($_POST as $key => $value) {
    if($key != 'buttonAvg') {
      $avg+=$value;
      $count++;
    }
  }
  echo " sredni wiek".number_format($avg/$count,2)."lat<hr>";
  echo '<a href="./4_1_form_ageavg.php">Strona glowna </a>';
}


 ?>

   </body>
 </html>

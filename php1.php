<?php
  echo 'ZSK<br>';
  echo 'ZSK<br>';
  $name="Janusz";
  echo 'Imie:$name<br>';
  echo "Imie: $name<br>";


  $calkowita=10;
  $bin=0b1011;
  echo $bin;
  $oct=011;
  $hex=0xA;
  echo "$hex<br>";
//konkatenacja
  echo "text1"."text2";

  //interpolacja
  echo "text1","text2";

  //typ zmiennoprzecinkowy \
  $x=10.5;


  //logiczny
  $prawda=true;//wyswietli 1
  $falsz=false;//nic nie nwyswietli
  echo $falsz;

  //skladnia heredoc
  echo<<<ETYKIETA
<hr>
Imie: $name<br>
<h3>Poznań<h3>
<hr>


ETYKIETA;

//nowdock
echo<<<'ETYKIETA'
<hr>
Imie: $name<br>
<h3>Poznań </h3>
<hr>
ETYKIETA;

echo "wartosc zmiennej name: $name,nazwa zmiennej
name \$name";
?>

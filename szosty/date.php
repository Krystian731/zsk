<?php

echo "dzien-miasaic-rok: ",date('d-m-Y'),'r.<br>';
echo date('m-d-y'),'r.<br>';
echo date('d-M-Y'),'r.<br>';
echo date('d-F-Y'),'r.<br>';

setlocale(LC_ALL, 'polish');
echo strftime($d)
 ?>

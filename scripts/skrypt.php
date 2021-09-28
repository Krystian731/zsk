<?php
echo "<pre>";


echo print_r($_POST);
echo "</pre>";


if (!empty($_POST['name']) && !empty($_POST['rectangle_figure'])){
  switch ($_POST['rectangle_figure']) {
    case 'kwadrat':
      echo " kwadrat";
      header('location: ./square.php');
      break;

    case 'prostokat':
      echo ' prostokat';
      break;
  }
}
else{
?>

<script>
history.back();

</script>
<?php

}


 ?>

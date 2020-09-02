<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->



<?php

  $randomArray = [];
  $nitems = 15;
  while (count ($randomArray) < $nitems) {
    $number = rand(1 , 50);
    if (!in_array($number, $randomArray)) {
      $randomArray[] = $number;
    }
  }

  var_dump ($randomArray);




 ?>

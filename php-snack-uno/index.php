<!-- Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->



<?php
  $partite = [
    1 => [
      "squadra-casa" => "Varese",
      "squadra-ospite"=> "Cantù",
      "punti-squadra-casa" => 50,
      "punti-squadra-ospite"=> 45
    ],
    2 => [
      "squadra-casa" => "Yamamai",
      "squadra-ospite"=> "Siena",
      "punti-squadra-casa" => 60,
      "punti-squadra-ospite"=> 63
    ],
    3 => [
      "squadra-casa" => "Pisa",
      "squadra-ospite"=> "Bari",
      "punti-squadra-casa" => 59,
      "punti-squadra-ospite"=> 55
    ]
  ];

  for ($i=1; $i <= count($partite); $i++) {
    echo $partite[$i]["squadra-casa"] . " - " . $partite[$i]["squadra-ospite"] . " | " . $partite[$i]["punti-squadra-casa"] . " - " . $partite[$i]["punti-squadra-ospite"];
    echo "<br>";
  };
 ?>

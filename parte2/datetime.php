<?php
$data = new DateTime();
// $data->setTimezone(1);
// echo $data->format('d/m/Y H:i:s');
// var_dump($data);

// $intervalo = new DateInterval("PT5M");
$intervalo = new DateInterval("P5Y10M5DT10H50M20S");
var_dump($data);
$data->sub($intervalo);
var_dump($data);
<?php
$data = new DateTime();

$intervalo = new DateInterval("P5DT10H50M");
$data->sub($intervalo);
echo $data->format("d/m/Y - H:i:s");
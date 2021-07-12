<?php


function asDollars($value) {
  if ($value<0) return "-".asDollars(-$value);
  return '$' . number_format($value, 2);
}

function ajustarFecha($fecha){

  $fecha_a = date("Y-m-d", strtotime($fecha));
              
  return $fecha_a;

}

function ajustarFechaEs($fecha){

  $fecha_a = date("d-m-Y", strtotime($fecha));
              
  return $fecha_a;

}

?>
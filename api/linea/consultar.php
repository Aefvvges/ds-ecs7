<?php
header('Content-Type: application/json');
require_once '../../modelo/demostracion.php';
require_once '../../modelo/linea.php';
require_once '../../modelo/tasa.php';
require_once 'respuesta/consultarRespuesta.php';

$resp = new ConsultarRespuesta();

$tasa = new Tasa();
$tasa->PlazoDesde = 0;
$tasa->PlazoHasta = 48;
$tasa->Tem = 4.7671;
$tasa->Tna = 58;
$tasa->ListTasaScore = null;

$dem = new Demostracion();
$dem->Id = 222;
$dem->Codigo = 1;
$dem->Descripcion = "DNI";

$lin = new Linea();
$lin->Id = 222;
$lin->Codigo = "752";
$lin->Demostracion = $dem;
$lin->Tasa = $tasa;
$lin->Tope = 250000;

$resp->ContieneError = false;
$resp->Mensaje = null;

$resp->Linea = $lin;

echo json_encode($resp);
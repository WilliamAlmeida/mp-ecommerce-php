<?php

require __DIR__ .  '/../../controllers/config.php';
require __DIR__ .  '/../../controllers/helper.php';

// SDK do Mercado Pago
// require __DIR__ .  '/../../vendor/autoload.php';

// Adicione as credenciais
// MercadoPago\SDK::setAccessToken($credentials[$modo_mp]['key_s']);

$respuesta = $_GET; 
// echo json_encode($respuesta);

cookie("payment", json_encode($respuesta), time()+3600, '/');

header("Location: ".$origin.'/feedback.php');
?>
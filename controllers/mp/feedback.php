<?php

require __DIR__ .  '/../../controllers/config.php';
require __DIR__ .  '/../../controllers/helper.php';

// SDK do Mercado Pago
require __DIR__ .  '/../../vendor/autoload.php';

// Adicione as credenciais
MercadoPago\SDK::setAccessToken($credentials[$modo_mp]['key_s']);

$respuesta = array(
	'Payment' => $_GET['payment_id'],
	'Status' => $_GET['status'],
	'MerchantOrder' => $_GET['merchant_order_id']
); 
echo json_encode($respuesta);
?>
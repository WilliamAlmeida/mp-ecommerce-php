<?php

require __DIR__ .  '/../../controllers/config.php';
require __DIR__ .  '/../../controllers/helper.php';

// SDK do Mercado Pago
// require __DIR__ .  '/../../vendor/autoload.php';

// Adicione as credenciais
// MercadoPago\SDK::setAccessToken($credentials[$modo_mp]['key_s']);

$respuesta = $_GET;
echo json_encode($respuesta);

$file_name = 'not_'.req('id');
$dir = '../../assets/files/mp/notifications/';
$myfile = fopen($dir.$file_name.".txt", "w") or 0;
if($myfile) {
	fwrite($myfile, json_encode($respuesta));
	fclose($myfile);
}

return;

?>
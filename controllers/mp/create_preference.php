<?php

require __DIR__ .  '/../../controllers/config.php';
require __DIR__ .  '/../../controllers/helper.php';

// SDK do Mercado Pago
require __DIR__ .  '/../../vendor/autoload.php';

// Adicione as credenciais
MercadoPago\SDK::setAccessToken($credentials[$modo_mp]['key_s']);

$preference = new MercadoPago\Preference();

$item = new MercadoPago\Item();
$item->title = req('title');
$item->quantity = req('unit');
$item->unit_price = req('price');

$preference->items = array($item);

$preference->back_urls = array(
	"success" => "https://williamalmeida-mp-commerce-php.herokuapp.com/controllers/mp/feedback.php",
	"failure" => "https://williamalmeida-mp-commerce-php.herokuapp.com/controllers/mp/feedback.php", 
	"pending" => "https://williamalmeida-mp-commerce-php.herokuapp.com/controllers/mp/feedback.php"
);
$preference->auto_return = "approved"; 

$preference->save();

$response = array(
	'id' => $preference->id,
); 
echo json_encode($response);
?>
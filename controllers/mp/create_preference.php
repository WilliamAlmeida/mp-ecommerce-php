<?php

require __DIR__ .  '/../../controllers/config.php';
require __DIR__ .  '/../../controllers/helper.php';

// SDK do Mercado Pago
require __DIR__ .  '/../../vendor/autoload.php';

MercadoPago\SDK::setIntegratorId("integrator_id");

// Adicione as credenciais
MercadoPago\SDK::setAccessToken($credentials[$modo_mp]['key_s']);

$preference = new MercadoPago\Preference();

$preference->payment_methods = array(
	"excluded_payment_methods" => array(
		array("id" => "visa")
	),
	"installments" => 6
);

$item = new MercadoPago\Item();
$item->id = '1234';
$item->title = req('title');
$item->description = 'Celular de Tienda e-commerce';
$item->quantity = req('unit');
$item->unit_price = req('price');
$item->picture_url = req('image');

$preference->items = array($item);

$payer = new MercadoPago\Payer([
	"name" => "Lalo",
	"surname" => "Landa",
	"email" => "test_user_92801501@testuser.com",
	"phone" => [
		"area_code"=> "55",
		"number"=> "98529-8743"
	],
	"address" => [
		"street_name" => "falsa",
		"street_number" => 123,
		"zip_code" => "78134190"
	]
]);

$preference->payer = $payer;

$preference->back_urls = array(
	"success" => "https://williamalmeida-mp-commerce-php.herokuapp.com/controllers/mp/feedback.php",
	"failure" => "https://williamalmeida-mp-commerce-php.herokuapp.com/controllers/mp/feedback.php", 
	"pending" => "https://williamalmeida-mp-commerce-php.herokuapp.com/controllers/mp/feedback.php"
);
$preference->auto_return = "approved"; 
$preference->external_reference = 'williamkillerca@hotmail.com';

$preference->save();

$response = array(
	'id' => $preference->id,
); 
echo json_encode($response);
?>
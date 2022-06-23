<?php

require __DIR__ .  '/../../controllers/config.php';
require __DIR__ .  '/../../controllers/helper.php';

// SDK do Mercado Pago
require __DIR__ .  '/../../vendor/autoload.php';

// echo '{"id":"725736327-a5d71c25-fe20-4139-924d-75ee5b69ca47","url":"https:\/\/www.mercadopago.com.br\/checkout\/v1\/redirect?pref_id=725736327-a5d71c25-fe20-4139-924d-75ee5b69ca47"}';
// return;

MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

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
	// "email" => "test_user_8516653@testuser.com",
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

$preference->binary_mode = true;
$preference->auto_return = "approved"; 
$preference->external_reference = 'williamkillerca@hotmail.com';
$preference->statement_descriptor = 'Tienda e-commerce';

$preference->save();

$response = array(
	'id' => $preference->id,
	'url' => $preference->init_point,
); 
echo json_encode($response);
?>
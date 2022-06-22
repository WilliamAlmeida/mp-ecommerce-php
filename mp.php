<?php
// SDK do Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

require __DIR__ .  '/controllers/helper.php';

$path = req('action');

// Adicione as credenciais
MercadoPago\SDK::setAccessToken('APP_USR-334491433003961-030821-12d7475807d694b645722c1946d5ce5a-725736327');

switch($path){
	case 'create_preference':
		$preference = new MercadoPago\Preference();

		$item = new MercadoPago\Item();
		$item->title = req('title');
		$item->quantity = req('unit');
		$item->unit_price = req('price');

		$preference->items = array($item);

		$preference->back_urls = array(
			"success" => "https://williamalmeida-mp-commerce-php.herokuapp.com/mp.php?action=feedback",
			"failure" => "https://williamalmeida-mp-commerce-php.herokuapp.com/mp.php?action=feedback", 
			"pending" => "https://williamalmeida-mp-commerce-php.herokuapp.com/mp.php?action=feedback"
		);
		$preference->auto_return = "approved"; 

		$preference->save();

		$response = array(
			'id' => $preference->id,
		); 
		echo json_encode($response);
	break;        
	case 'feedback':
		$respuesta = array(
			'Payment' => $_GET['payment_id'],
			'Status' => $_GET['status'],
			'MerchantOrder' => $_GET['merchant_order_id']        
		); 
		echo json_encode($respuesta);
	break;
	default:
		echo 'sem parametro de ação';
}

return;
?>
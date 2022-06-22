<?php
// SDK do Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

require __DIR__ .  '/controllers/helper.php';

$path = req('action');

echo $path;

return;

// Adicione as credenciais
MercadoPago\SDK::setAccessToken('APP_USR-334491433003961-030821-12d7475807d694b645722c1946d5ce5a-725736327');

switch($path){
	case 'create_preference':
		$json = file_get_contents("php://input");
		$data = json_decode($json);

		$preference = new MercadoPago\Preference();

		$item = new MercadoPago\Item();
		$item->title = $data->description;
		$item->quantity = $data->quantity;
		$item->unit_price = $data->price;

		$preference->items = array($item);

		$preference->back_urls = array(
			"success" => "http://localhost:8080/feedback",
			"failure" => "http://localhost:8080/feedback", 
			"pending" => "http://localhost:8080/feedback"
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
}
?>
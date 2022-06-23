<?php

$origin = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'];

$version = '1.7';

$money_prefix = 'R$';

$modo_mp = "t";

// Credenciais de produção
$credentials['p'] = [
	'key_p' => "APP_USR-46f0fc47-5251-44c9-bf0d-c196123bad4f",
	'key_s' => "APP_USR-7068988218222252-062214-dd37f5be37545b0399d90b6f17743618-54814172"
];

// Credenciais de teste
$credentials['t'] = [
	'key_p' => "'TEST-95a06822-1c44-4b55-bf08-70997f240aa7'",
	'key_s' => "TEST-7068988218222252-062214-dc8eceb9c7e07c14b857dea57a3d3c73-54814172"
];

// Credenciais do Exame
// $credentials['t'] = [
// 	'key_p' => "APP_USR-46f0fc47-5251-44c9-bf0d-c196123bad4f",
// 	'key_s' => "APP_USR-334491433003961-030821-12d7475807d694b645722c1946d5ce5a-725736327"
// ];

/*
{
    "id": 1147967020,
    "nickname": "TETE9497308",
    "password": "qatest8872",
    "site_status": "active",
    "email": "test_user_8516653@testuser.com"
}

cancelado pelo usuário

http://mp.supremus.com/controllers/mp/feedback.php?collection_id=null&collection_status=null&payment_id=null&status=null&external_reference=williamkillerca@hotmail.com&payment_type=null&merchant_order_id=null&preference_id=725736327-a5d71c25-fe20-4139-924d-75ee5b69ca47&site_id=MLB&processing_mode=aggregator&merchant_account_id=null

venda finalizada

http://mp.supremus.com/controllers/mp/feedback.php?collection_id=23403281996&collection_status=accredited&payment_id=23403281996&status=approved&external_reference=williamkillerca@hotmail.com&payment_type=credit_card&merchant_order_id=5036216613&preference_id=725736327-a5d71c25-fe20-4139-924d-75ee5b69ca47&site_id=MLB&processing_mode=aggregator&merchant_account_id=null

*/

?>
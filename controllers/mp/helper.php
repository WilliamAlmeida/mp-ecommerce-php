<?php

function arrayMercadoPago($value = null, $value_2 = null) {
	$array = array();

	$array['approved'] = [
		'approved' => 'Pronto, seu pagamento foi aprovado! No resumo, você verá a cobrança do valor como Tienda e-commerce.',
		'accredited' => 'Pronto, seu pagamento foi aprovado! No resumo, você verá a cobrança do valor como Tienda e-commerce.'
	];

	$array['in_process'] = [
		'in_process' => 'Estamos processando o pagamento.<br>Não se preocupe, em menos de 2 dias úteis informaremos por e-mail se foi creditado.',
		'pending_contingency' => 'Estamos processando o pagamento.<br>Não se preocupe, em menos de 2 dias úteis informaremos por e-mail se foi creditado.',
		'pending_review_manual' => 'Estamos processando seu pagamento.<br>Não se preocupe, em menos de 2 dias úteis informaremos por e-mail se foi creditado ou se necessitamos de mais informação.'
	];

	$array['rejected'] = [
		'rejected' => 'Não conseguimos processar seu pagamento.',
		'cc_rejected_blacklist' => 'Não pudemos processar seu pagamento.',
		'cc_rejected_card_error' => 'Não conseguimos processar seu pagamento.',
		'cc_rejected_duplicated_payment' => 'Você já efetuou um pagamento com esse valor. Caso precise pagar novamente, utilize outro cartão ou outra forma de pagamento.',
		'cc_rejected_high_risk' => 'Seu pagamento foi recusado.<br>Escolha outra forma de pagamento. Recomendamos meios de pagamento em dinheiro.',
		'cc_rejected_max_attempts' => 'Você atingiu o limite de tentativas permitido.<br>Escolha outro cartão ou outra forma de pagamento.'
	];

	if(isset($array[$value])) {
		if($value_2) {
			if(isset($array[$value][$value_2])) {
				return $array[$value][$value_2];
			}else{
				return $array[$value];
			}
		}else{
			return $array[$value];
		}
	}

	return null;
}

?>
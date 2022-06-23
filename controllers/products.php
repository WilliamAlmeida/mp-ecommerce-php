<?php

function loadMarcas()
{
	return $marcas = [
		"Apple" => ['data-tracking' => 'ipadCompatibility=ipadpro_12_9_2, '], 
		"LG" => ['data-tracking' => 'ipadCompatibility=ipadpro_12_9, '], 
		"Motorola" => ['data-tracking' => 'ipadCompatibility=ipadpro_10_5, '], 
		"Samsung" => ['data-tracking' => 'ipadCompatibility=ipadpro_9_7, '], 
		"Huawei" => ['data-tracking' => 'ipadCompatibility=ipad_9_7, '], 
		"Sony" => ['data-tracking' => 'ipadCompatibility=ipad6gen, ']
	];
}

function loadProducts()
{
	$produtos = [];
	$produto = [
		'title' => 'Samsung Galaxy S9',
		'price' => 15000,
		'image' => 'images/samsung-galaxy-s9-xxl.jpg',
		'marca' => 'Samsung',
	];
	$produtos[] = $produto;
	$produto = [
		'title' => 'LG G6',
		'price' => 10000,
		'image' => 'images/l6g6.jpg',
		'marca' => 'LG',
	];
	$produtos[] = $produto;
	$produto = [
		'title' => 'iPhone 8',
		'price' => 16000,
		'image' => 'images/Screen Shot 2017-11-01 at 13.01.54.png',
		'marca' => 'Apple',
	];
	$produtos[] = $produto;
	$produto = [
		'title' => 'Motorola G5',
		'price' => 9000,
		'image' => 'images/motorola-moto-g5-plus-1.jpg',
		'marca' => 'Motorola',
	];
	$produtos[] = $produto;
	$produto = [
		'title' => 'Moto G4',
		'price' => 8000,
		'image' => 'images/motorola-moto-g4-3.jpg',
		'marca' => 'Motorola',
	];
	$produtos[] = $produto;
	$produto = [
		'title' => 'Sony Xperia XZ2',
		'price' => 10000,
		'image' => 'images/003.jpg',
		'marca' => 'Sony',
	];
	$produtos[] = $produto;

	unset($produto);
	return $produtos;
}

$marcas = loadMarcas();
$produtos = loadProducts();

?>
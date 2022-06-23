<?php

function reqGet($value) {
	if(isset($_GET[$value])) {
		return $_GET[$value];
	}

	return null;
}

function reqPost($value) {
	if(isset($_POST[$value])) {
		return $_POST[$value];
	}

	return null;
}

function req($value) {
	$return = reqGet($value);
	if(!empty($return)) return $return;

	$return = reqPost($value);
	if(!empty($return)) return $return;

	return null;
}

function getcookie($value) {
	if(isset($_COOKIE[$value])) {
		return $_COOKIE[$value];
	}

	return null;
}

function cookie(string $name, string $value = "", int $expire = 0, string $path = "", string $domain = "", bool $secure = false, bool $httponly = false): bool {
	$return = setcookie($name, $value, $expire, $path);
	$_COOKIE[$name] = $value;

	return $return;
}

?>
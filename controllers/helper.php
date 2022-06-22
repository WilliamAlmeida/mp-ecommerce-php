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

?>
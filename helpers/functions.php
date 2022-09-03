<?php

function get_post_array($form_names){

	$data = [];

	foreach($form_names as $name){
		$data[$name] = isset($_POST[$name]) ? $_POST[$name] : '';
	}

	return $data;
}

function set_login_session($user){
	$_SESSION['authenticated'] = true;
	$_SESSION['user'] = [
		'id' => $user['id'],
		'name' => $user['name'],
		'email' => $user['email'],
	];
}

function is_authenticated(){
	return isset($_SESSION['authenticated']);
}
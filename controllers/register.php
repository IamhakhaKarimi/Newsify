<?php
include_once '../helpers/functions.php';
require_once '../core/Model.php';
require_once '../core/User.php';

if(isset($_POST['submit_register'])){

	$names = [
		'name', 'email', 'password'
	];

	$data = get_post_array($names);
	$data['password'] = md5($data['password']);
	
	$user_model = new User();

	$user_id = $user_model->insert($data);
	header('location:../account.php');
	

}
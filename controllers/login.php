<?php
session_start();

include_once '../helpers/functions.php';
require_once '../core/Model.php';
require_once '../core/User.php';

if(isset($_POST['submit_login'])){

	$names = ['email', 'password'];

	$data = get_post_array($names);

	$data['password'] = md5($data['password']);

	$user_model = new User();

	$data = $user_model->select($data, true);

	if($data != null){
		set_login_session($data);

		header('location: ../index.php');
	}else{
		header('location: ../login.php?auth_error=true');
	}
}
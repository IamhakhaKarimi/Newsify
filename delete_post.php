<?php 
    require_once ('core/Model.php');
	require_once ('core/Post.php');
    require_once 'helpers/functions.php';
    session_start();

if(!is_authenticated()){
	header('location: login.php');
}
$news_post = new Post();
$u_id = $news_post->select(['user_id'=> $_SESSION['user']['id']]);
if(isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];
    
    $news_post -> delete($id);
    
        $news_post; 
        header('location:account.php');
}
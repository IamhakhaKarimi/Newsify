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
foreach($u_id as $user){
    $user_id = $user['user_id'];
}
    

if(isset($_POST['submit'])){
    $post_title = $_POST['post_title'];
    $post_description = $_POST['post_description'];

    //image upload//
    $image_file = $_FILES['post_image'];
    $tmp_name = $image_file['tmp_name'];
    $image_name = $image_file['name'];

    move_uploaded_file($tmp_name,'storage/posts/'.$image_name);
    //image upload//
    
    $data = [
        'user_id' =>$user_id,
        'title' => $post_title,
        'description' => $post_description,
        'image' => $image_name
    ]; 
    
    $news_post -> insert($data);
    
        $news_post; 
        header('location:account.php');
     
}



?>

<?php 
    

?>
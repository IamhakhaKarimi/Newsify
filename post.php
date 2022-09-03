<?php
session_start();
require_once 'helpers/functions.php';
require_once 'core/Model.php';
require_once 'core/Post.php';

if(!is_authenticated()){
	header('location: login.php');
}

$post_model = new Post();
$posts = $post_model->select(['user_id' => $_SESSION['user']['id']]);

require_once 'includes/header.php';
?>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"></svg>
        <span class="fs-4 btn btn-outline-danger">Newsify</span>
      </a>

      <ul class="nav nav-pills ">
        <li class="nav-item "><a href="index.php" class="nav-link active " aria-current="page">News Post</a></li>
        <li class="nav-item"><a href="account.php" class="nav-link">My Account</a></li>
        <li class="nav-item"><a href="controllers/logout.php" class="nav-link">Logout</a></li>
      </ul>
    </header>
</div>
<!-- upload post -->
<div class="row ">
    <div class=" justify-content-center">
    <!--  -->
    <div class="  ">
                <form action="news_post.php" method="post" enctype="multipart/form-data" class="form d-flex justify-content-center">
            
                <div class="form-group">
                <h4 class=""> Upload Post </h4> 
                <input type="hidden" name="id" value="">
                <label>Post Title</label>
                <input type="text" class="form-control" name="post_title" placeholder="Enter News Title" value="" required ><br>

                <label>Description</label>
                <textarea class="form-control" aria-label="With textarea" placeholder="Enter News" value="" name="post_description" required></textarea><br>
                

                
                <label>News Image</label>
                <input type="file" class="form-control" name="post_image" >  <label>            </label><br>

                <input type="submit" class="form-control btn btn-success shadow-sm" value="Save"   name="submit"> <label>            </label><br>
                <input type="reset" class="form-control btn btn-light shadow-sm" value="Reset"   name="">
                
                
            </div>
               
            </form>
       
        
        
        </div>
    <!--  -->
    </div>
</div>


<?php

require_once 'includes/footer.php';?>
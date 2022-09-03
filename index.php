
<?php

	require_once ('core/Model.php');
	require_once ('core/Post.php');

	$post_model = new Post();

	$post_model->select();

	$posts = $post_model->get_posts_with_user();

?>

		<?php require_once('includes/header.php') ?>
	



	<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"></svg>
        <span class="fs-4 btn btn-outline-danger">Newsify</span>
      </a>

      <ul class="nav nav-pills ">
        <li class="nav-item "><a href="index.php" class="nav-link active " aria-current="page">Home</a></li>

        <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>
        <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>

        <li class="nav-item"><a href="account.php" class="nav-link">My Account</a></li>
        <li class="nav-item"><a href="controllers/logout.php" class="nav-link">Logout</a></li>
      </ul>
    </header>
</div>
		<main>

		<div class="container" >


		
		<div class="row col-sm-6 justify-content-center">
			<?php foreach ($posts as $post){
				
				echo '<div class="card shadow-sm row g-6  mb-4 shadow-sm  "  >';
				if($post['image']){
					echo '<img src="storage/posts/'.$post['image'] .'" class="card-img-top" alt="...">';
				}
				echo '
				<div class="card-body ">
				  <h5 class="card-title">'. $post['title'] .'</h5>
				  <p class="card-text">'. $post['description'] .'</p>
				
					<div class="card-footer">
						<div class="row ">
							<div class="col-sm-10">
							
							'. $post['created_at'] .'
							</div>
							<div class="col-sm-2 justify-content-end">
							
							'. $post['user_name'] .'
							</div>
						</div>
					</div>
				</div>
			  </div><br>';
			
			}

		?>
		
		</div>


		</div>

	</main>
	
	<?php require_once('includes/footer.php') ?>


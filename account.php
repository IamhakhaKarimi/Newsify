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


?>


<?php require_once('includes/header.php') ?>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <!-- <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none"> -->
        <svg class=" me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Account</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link " aria-current="page">Home</a></li>

        <li class="nav-item"><a href="account.php" class="nav-link active">My Account</a></li>
        <li class="nav-item"><a href="controllers/logout.php" class="nav-link">Logout</a></li>
      </ul>
    </header>
</div>



</style>
<main>

	<div class="container">
		
		<a href="post.php" class="btn btn-primary" style="margin-bottom:20px ;">New Post</a>  

		<div class="row shadow" style="padding:10px">
			<div class="col-md-12 ">
				<table class="table table-light table-striped">
					<tr class="table-info">
						<th>#</th>
						<th>Title</th>
						<th>Description</th>
						<th>Image</th>
						<th>Action</th>
					</tr>

					<?php
						$i = 1;
						foreach ($posts as $post) {
							echo	"<tr>
								<td>". $i++ ."</td>
								<td><strong>{$post['title']} </strong></td>
								<td class='w-30'>{$post['description']}</td>
								<td>
									".( ($post['image']) ? '<img src="storage/posts/'. $post['image'] .'" />' : '<i>No Image</i>' )."
								</td>

								<td>
									 
									<a href='delete_post.php?delete_id={$post['id']}' class='btn btn-danger'>Delete</a>
								</td>
							</tr>";
						}
					?>
				</table>
			</div>
		</div>
	</div>
	
         
        
</main>

<?php require_once('includes/footer.php') ?>
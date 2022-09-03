<?php 
	session_start();
	require_once 'helpers/functions.php';
	require_once 'core/Model.php';
	require_once 'core/Post.php';
	if(is_authenticated()){
		header('location: account.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Newsify</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
	td img {
		width: 200px;
	}

</style>
</head>
<body>


<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Login</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link " aria-current="page">Home</a></li>

        <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>
        <li class="nav-item"><a href="login.php" class="nav-link active">Login</a></li>
        <li class="nav-item"><a href="controllers/logout.php" class="nav-link">Logout</a></li>
      </ul>
    </header>
</div>

<main class="form-signin w-100 m-auto">

<div class="row">
	<div class="col-6 offset-3">

		<form method="post" action="controllers/login.php">

		  <!-- <img class="mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
		  <h1 class="h3 mb-3 fw-normal">Please Login</h1>

		  <?php 

			if(isset($_GET['auth_error'])){
				echo "<div class='alert alert-danger'>
					Wrong credentials
				</div>";
			}

			?>
	  
		  <div class="form-floating">
			<input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
			<label for="floatingInput">Email address</label>
		  </div>
		  <br>
		  <div class="form-floating">
			<input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
			<label for="floatingPassword">Password</label>
		  </div>
	  	<br>
		  
		  <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit_login">Login</button>
		  <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
		</form>
	</div>
</div>
</main>

<?php require_once('includes/footer.php') ?>
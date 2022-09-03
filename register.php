<?php 
	session_start();
	require_once 'helpers/functions.php';
	require_once 'core/Model.php';
	require_once 'core/Post.php';
	if(is_authenticated()){
		header('location: account.php');
	}
?>

<?php require_once('includes/header.php') ?>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Register</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link " aria-current="page">Home</a></li>

        <li class="nav-item"><a href="register.php" class="nav-link active">Register</a></li>
        <li class="nav-item"><a href="login.php" class="nav-link ">Login</a></li>
      </ul>
    </header>
</div>
<main class="form-signin w-100 m-auto">

<div class="row">
	<div class="col-6 offset-3">

		<form method="post" action="controllers/register.php">

		  <!-- <img class="mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
		  <h1 class="h3 mb-3 fw-normal">Please Register</h1>
	  
		  <div class="form-floating">
			<input type="text" class="form-control" name="name" id="floatingInput" placeholder="name@example.com">
			<label for="floatingInput">Full Name</label>
		  </div>
		  <br>
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
		  
		  <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit_register">Register</button>
		  <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
		</form>
	</div>
</div>
</main>

<?php require_once('includes/footer.php') ?>
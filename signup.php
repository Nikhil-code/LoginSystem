<?php
	include "header.php";
?>
<main>
	
	

	<div class="container">
		<h1>SignUp Form</h1>
		<form action="include/signup-inc.php" method="post">
			<div class="form-group">
				<label for="exampleInputEmail1">Username</label>
				<input type="text" name="uid" placeholder="Username" class="form-control" id="exampleInputUser1" aria-describedby="userHelp">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="text" name="mail" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" name="pwd" placeholder="Password" class="form-control" id="exampleInputPassword1">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Confirm Password</label>
				<input type="password" name="pwd-repeat" placeholder="Confirm Password" class="form-control" id="exampleInputConfPassword1">
			</div>
			<button type="submit" class="btn btn-primary" name="signup-submit">Sign up</button>
		</form>
	</div>

	<?php
		if (isset($_GET['error'])) {
			if ($_GET['error'] == "emptyfields") {
				echo '<p class="d-inline-block alert alert-danger" role="alert">Fill in all the fields!</p>';
				exit();
			}
			if ($_GET['error'] == "invalidmailuid") {
				echo '<p class="d-inline-block alert alert-info" role="alert">Inavalid Username and Email!</p>';
				exit();
			}
			if ($_GET['error'] == "invalidmail") {
				echo '<p class="d-inline-block alert alert-info" role="alert">Invalid Email!</p>';
				exit();
			}
			if ($_GET['error'] == "invalidusername") {
				echo '<p class="d-inline-block alert alert-info" role="alert">Invalid Username!</p>';
				exit();
			}
			if ($_GET['error'] == "passwordcheck") {
				echo '<p class="d-inline-block alert alert-warning" role="alert">Your password do not match!</p>';
				exit();
			}
			if ($_GET['error'] == "usertaken") {
				echo '<p class="d-inline-block alert alert-warning" role="alert">Username is already taken!</p>';
				exit();
			}
		}
		elseif (isset($_GET['signup']))
		{
			echo '<p class="d-inline-block alert alert-success" role="alert">Signup Successfull</p>';
			exit();
		}
	?>

</main>
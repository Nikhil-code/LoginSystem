<?php
	include "header.php";
	session_start();
?>


	<?php
		if (isset($_SESSION['userUid'])) {
			header("Location: index.php");
		}
		else {
			echo '<div class="container mt-5">
					<form action="include/login-inc.php" method="post">
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
							<div class="col-sm-10">
								<input type="text" name="mailuid" placeholder="Username/Email" class="form-control" id="inputEmail3">
							</div>
						</div>
						<div class="form-group row">
							<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
							<div class="col-sm-10">
								<input type="password" name="pwd" class="form-control" id="inputPassword3" placeholder="Password">
							</div>
						</div>

						<div class="form-group row">
							<div class="offset-sm-2 col-sm-10">
								<button type="submit" name="login_submit" class="btn btn-outline-info">Sign in</button>
							</div>
						</div>
					</form>
					<a href="signup.php" class="btn btn-outline-success">Signup</a>
				</div>';
		}
	?>

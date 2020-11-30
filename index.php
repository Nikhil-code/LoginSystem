<?php
	include "header.php";
	session_start();
?>

<main>
	<?php
		if(!isset($_SESSION['userUid']))
		{
			header("Location: login.php");
			exit();
		}
	?>

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-3">Welcom <span class="font-weight-bold font-italic text-primary"><?php echo $_SESSION['userUid']; ?></span></h1>
			<p class="lead">This is PHP Login & SignUp system made in prepared statement</p>
		</div>
	</div>

	<form action="include/logout-inc.php" method="post">
		<button type="submit" name="logout-submit">Logout</button>
	</form>

</main>
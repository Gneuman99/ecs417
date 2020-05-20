<?php
	require "header.php";
?>

	<main>
		<div class="wrapper-main">
			<section class="section-default">
			<h2>Signup</h2>
			<form action="includes/signup.inc.php" method="post">
				<input type="text" name="uid" placeholder="Username">
				<input type="text" name="mail" placeholder="E-mail">
				<input type="passsword" name="pwd" placeholder="passsword">
				<input type="passsword" name="pwd1" placeholder="repeat	passsword">
				<button type="submit" name="signup-submit">Signup</button>
			</section>
		</div>
	</main>
	
<?php
	require "footer.php";
?>
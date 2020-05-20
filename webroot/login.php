<?php
	require "header.php";

?>
	 <link rel="stylesheet" href="logStyle.css" type="text/css"/>
	<main>
		<div class="wrapper-main">
			<section class="section-default">
			<h2>login</h2>
			<form action="includes/login.inc.php" method="post">
		<input type="text" name="mailuid" placeholder="username/email">
		<br />
		<input type="password"	name="pwd" palceholder="Password">
		<br />
		<button type="submit" name="login-submit">Login</button>
			</form>
			</section>
		</div>
	</main>
	
<?php
	require "footer.php";
?>
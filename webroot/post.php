<?php
	require "header.php";
	error_reporting(0);

	if ($_POST['submit']) {
		$title = $_POST['title'];
		$content = $_POST['content'];
		include_once("includes/dbh.inc.php");
		$sql = "INSERT INTO blog (title, content) VALUE ('$title', '$content')";
		mysqli_query($conn, $sql);
		echo "Entry posted";
		exit();
	}
	
?>
<link rel="stylesheet" href="logStyle.css" type="text/css"/>

<!DOCTYPE html>

<body>
<div class="wrapper-main">
<h1>add blog</h1><br />

<form method="post" action="post.php" onreset="resetNotif()">
	Title: <input type = "text" name="title" /><br />
	Content: <textarea name="content"></textarea><br />
	<input type="submit" name="submit" value="Post entry" />
	<input type="reset" name="rest" value="clear">
</form><br />

<script>
function resetNotif() {
  alert("The form has been cleared");
}
</script>


	<a href="index.php">Home</a>
	</body>
	</div>
	<?php
	require "footer.php";
?>

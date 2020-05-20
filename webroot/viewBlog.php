<?php
	require "header.php";
?>

<?php
	include_once("includes/dbh.inc.php");
	
	if (isset($_SESSION['userId'])){
		echo '<form action="post.php" method="post">
		<button type="submit" name="post">Add Entry</button>
		</form>';
	}
	else{
		echo '<form action="login.php" method="post">
		<button type="submit" name="login-submit">Login</button>
  </form>';
	}

	$sql = "SELECT * FROM blog ORDER BY id DESC";
	$result = mysqli_query($conn, $sql);
	
	while ($row = mysqli_fetch_array($result)) {
		$title = $row['title'];
		$content = $row['content'];
		?>
		
		<h2><?php echo $title; ?> </h2> 
		<p><?php echo $content; ?> </p>
		<hr />
	<?php
	}
	?>
	
	<a href="index.php">Home</a>
	<?php
	require "footer.php";
?>

<?php
	require "header.php";
?>

<?php
	include_once("dbh.inc.php");
	


	$sql = "SELECT * FROM blog ORDER BY id DESC";
	$result = mysqli_query($conn, $sql);
	
	while ($row = mysqli_fetch_array($result)) {
		$title = $row['title'];
		$content = $row['content'];
		?>
		
		<h2><?php echo $title; ?> </h2> 
		<p><?php echo $content; ?> </p>
	<?php
	}
	?>
	
	<?php
	require "footer.php";
?>

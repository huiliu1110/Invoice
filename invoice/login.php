<!--Connect with database-->
<?php include"db_connection.php";?>

<?php
	$name=$_POST['username'];
    $pwd=$_POST['password'];

    $query  = "SELECT * ";
	$query .= "FROM user ";
	$query .= "ORDER BY id";

	$result = mysqli_query($connection, $query);
	// Test if there was a query error
	if (!$result) {
		die("Database query failed.");
	}
?>

<?php
	while($row = mysqli_fetch_assoc($result)) 
	{
		if(($row['username']==$name)&&($row['password']==$pwd))
		{

		?>
		<script language='javascript' type='text/javascript'>
			document.location.href="products.php?condition=";
		</script>
		<?php
		}
	}
?>

<script language='javascript' type='text/javascript'>
document.location.href="index.php?login=failed";
</script>
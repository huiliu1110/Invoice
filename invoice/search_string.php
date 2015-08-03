<?php 
	$condition = $_POST['condition'];
?>

<script language='javascript' type='text/javascript'>
document.location.href="products.php?condition="+"<?php echo $condition;?>";
</script>
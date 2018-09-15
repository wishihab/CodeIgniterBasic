<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>1NPUT</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2>Input Data</h2>
	<form action="<?php echo base_url(); ?>crud/action_add" method="post" accept-charset="utf-8">
		
		<input type="text" name="customer" placeholder="Nama Customer"><br>
		<input type="text" name="steam" placeholder="Nick Steam"><br>
		<input type="text" name="link" placeholder="Link Steam"><br>
		<input type="text" name="order" placeholder="Nama Item"><br>
		<input type="text" name="harga" placeholder="Harga Itm"><br>
		<input type="text" name="tanggal" placeholder="Tanggal"><br>
		<input type="text" name="status" placeholder="Status"><br>
		<input type="submit" name="save">
	</form>
</body>
</html>
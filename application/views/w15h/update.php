<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>3D1T</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2>Input Data</h2>
	<?php foreach ($content->result() as $key): ?>
		<form action="<?php echo base_url(); ?>crud/action_update/<?php echo $key->id ?>" method="post" accept-charset="utf-8">
		
		<input type="text" name="customer" value="<?php echo $key->nama_c ?>" ><br>
		<input type="text" name="steam" value="<?php echo $key->nama_sc ?>" ><br>
		<input type="text" name="link" value="<?php echo $key->link_sc ?>" ><br>
		<input type="text" name="order" value="<?php echo $key->order_sc ?>" ><br>
		<input type="text" name="harga" value="<?php echo $key->harga_sc ?>" ><br>
		<input type="text" name="tanggal" value="<?php echo $key->tgl_sc?>" ><br>
		<input type="text" name="status" value="<?php echo $key->status_sc ?>" ><br>
		<input type="submit" name="save">
	</form>
		
	<?php endforeach ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Index</title>
	<link rel="stylesheet" href="">
	
</head>
<body>
	<a href="<?php echo base_url(); ?>crud/add">Add Data</a>
	<center><h2>Halaman CRUD Dota 2 Store Indonesia</h2></center>

	<table border="2">
		<tr>
			<td>No</td>
			<td>Name Customer</td>
			<td>Name Steam</td>
			<td>Link Steam</td>
			<td>Order</td>
			<td>Harga</td>
			<td>Tanggal Order</td>
			<td>Status</td>
			<td>Action</td>
		</tr>
		<?php foreach ($content->result() as $key): ?>
			<tr>
			<td><?php echo $key->id ?></td>
			<td><?php echo $key->nama_c ?></td>
			<td><?php echo $key->nama_sc ?></td>
			<td><?php echo $key->link_sc ?></td>
			<td><?php echo $key->order_sc ?></td>
			<td><?php echo $key->harga_sc ?></td>
			<td><?php echo $key->tgl_sc ?></td>
			<td><?php echo $key->status_sc ?></td>
			<td><a href="<?php echo base_url() ?>crud/update/<?php echo $key->id ?>">Edit | </a><a href="<?php echo base_url() ?>crud/delete/<?php echo $key->id ?>">Delete</a></td>
		</tr>
		<?php endforeach ?>
	</table>


	<h2>Total Pemasukan</h2>
	<?php
	
	 ?>


	
</body>
</html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Inventory Management</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div class="container-fluid">
	<h1>Welcome to Inventory Manager</h1>

	<div class="row">
		<p><h2>Add more Items</h2></p>
		<form method = "post" action="<?php echo site_url('welcome/store');?>" id ="form">
		
		Item Name: <input type="text"  class="form-group" name="name" id="name">
		Item Quantity: <input type="number" class="form-group" name="quantity" id="quantity">
		<input type="submit" class="btn btn-primary" value="submit">
		</form>
	</div>
<br><br><br>
	<div class="row">
	<table class="table table-bordered">
    <thead>
      <tr>
        <th>Item Name</th>
        <th>Quantity</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
	<?php foreach ($items as $item):?>
      <tr>
        <td><?=$item->name?></td>
        <td><?=$item->quantity?></td>
        <td><a href="<?php print site_url('welcome/edit/' . $item->id); ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
		<a href="<?php print site_url('welcome/delete/' . $item->id); ?>" class="btn  btn-danger"><i class="fa fa-trash-o"></i></a> 
</td>
      </tr>
	<?php endforeach;?>
    </tbody>
  </table>
	</div>


</div>

</body>
</html>
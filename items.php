<!DOCTYPE html>
<html>
<head>
	<title>SF INSERT DATA</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
	<div class='container-fluid'>
	<div class='jumbotron text-center'>
	<h1>SASSY FASHION</h1>
	<p>Where Fashion Starts</p>
	</div>
	</div>
	</header>
	<main>
	<div class='container'>
	<form action ='db.php' method='POST'>
	<div class='form-group'>
	<label for='name'>Product Name</label>
	<input class ='form-control' id='name' name='name' type='text'>
	</div>
	<div class='form-group'>
	<label for='price'>Price(INR)</label>
	<input class ='form-control' id='price' name='price' type='text'>
	</div>
	<div class='form-group'>
	<label for='description'>descriptiom</label>
	<input class ='form-control' id='description' name='description' type='text'>
	</div>
	<button class ='btn btn-success' type ='submit'>Add Product</button>
	</form>
	</div>
	</main>
</body>
</html>
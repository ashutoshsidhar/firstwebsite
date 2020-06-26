<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to Sassy Fashion</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		 <style>
		 .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
	</head>
	<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Sassy Fashion</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="items.php">Add Items</a>
      </li>
      <li class="nav-item">
        <a class="nav-link enabled" href="#" tabindex="-1" aria-enabled="true">Shop By</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
	</header>	
	<div class="container mt-3">

<h2>Welcome To <emph>SF</emph></h2>
<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpg" alt="Latest Trends" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="2.jpg" alt="Fashion Statement" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="3.jpg" alt="SASSY" width="1100" height="500">
    </div>
  </div>
  
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</div>
<main>
	<?php
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SFHUB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, price, description FROM items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<class='col-md-4 col-xs-4 col-sm-4'>
		<div class='thumbnail'><img src='https://placehold.it/320x150'alt='Thumbnail Image'>
		<div class='caption'>
		<h3>".$row['name']."</h3>
		<p>".$row['price'] .$row['description']."</p>
		<p>
		<a href='#' class='btn btn-success'>Buy Now</a>
		<a href='#' class='btn btn-info'>More Information</a>
		</div>
		</div>
		</div>";
    }
} else {
    echo "0 results";
}

$conn->close();
	?>


</main>
	
	
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</body>
</html>
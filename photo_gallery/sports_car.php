<!DOCTYPE html>
<html>
  <head>
      <title>Photo Gallery</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/lightbox.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script> 
        <script src="js/lightbox.js"></script>
		<style>
			.thumbnail img{
				width: 350px;
				height: 200px;
			}
		</style>
  </head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<div class="navbar-brand">Photo Gallery</div>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Home</a></li>
				<li><a href="sports_car.php">Sports Car</a></li>
				<li><a href="others.php">Others</a></li>
			</ul>
		</div>
	</nav>

	<div class="container">
		<div class="page-header">
			<h3>Photo Gallery</h3>
		</div>

		<div class="row">
			<div class="col-md-4">
				<a href="image/car1.jpg" data-lightbox="gallery" data-title="My Sports Car 1" class="thumbnail">
					<img src="image/car1.jpg">
				</a>
			</div>
			<div class="col-md-4">
				<a href="image/car2.jpg" data-lightbox="gallery" data-title="My Sports Car 2" class="thumbnail">
					<img src="image/car2.jpg">
				</a>
			</div>
			<div class="col-md-4">
				<a href="image/car3.jpg" data-lightbox="gallery" data-title="My Sports Car 3" class="thumbnail">
					<img src="image/car3.jpg">
				</a>
			</div>
			<div class="col-md-4">
				<a href="image/car4.jpg" data-lightbox="gallery" data-title="My Sports Car 4" class="thumbnail">
					<img src="image/car4.jpg">
				</a>
			</div>
			<div class="col-md-4">
				<a href="image/car5.jpg" data-lightbox="gallery" data-title="My Sports Car 5" class="thumbnail">
					<img src="image/car5.jpg">
				</a>
			</div>
			<div class="col-md-4">
				<a href="image/car6.jpg" data-lightbox="gallery" data-title="My Sports Car 6" class="thumbnail">
					<img src="image/car6.jpg">
				</a>
			</div>
		</div>

		<footer class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p class="text-center" style="padding: 10px;">Created by Aeron</p>
			</div>
		</footer>

	</div>

</body>
</html>
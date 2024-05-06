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
				<a href="image/yelan.png" data-lightbox="gallery" data-title="Yelan" class="thumbnail">
					<img src="image/yelan.png">
				</a>
			</div>
			<div class="col-md-4">
				<a href="image/minecraft.png" data-lightbox="gallery" data-title="Minecraft Modern House" class="thumbnail">
					<img src="image/minecraft.png">
				</a>
			</div>
			<div class="col-md-4">
				<a href="image/pacman.jpg" data-lightbox="gallery" data-title="Pacman and The Ghosts" class="thumbnail">
					<img src="image/pacman.jpg">
				</a>
			</div>
			<div class="col-md-4">
				<a href="image/identityV.jpg" data-lightbox="gallery" data-title="Identity V Show" class="thumbnail">
					<img src="image/identityV.jpg">
				</a>
			</div>
			<div class="col-md-4">
				<a href="image/GOW.png" data-lightbox="gallery" data-title="Kratos in War" class="thumbnail">
					<img src="image/GOW.png">
				</a>
			</div>
			<div class="col-md-4">
				<a href="image/marioGalaxy.jpg" data-lightbox="gallery" data-title="Mario in Galaxy" class="thumbnail">
					<img src="image/marioGalaxy.jpg">
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
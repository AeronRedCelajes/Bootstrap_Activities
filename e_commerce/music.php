<!DOCTYPE html>
<html>
<head>
    <title>E-Commerce</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <style>
        body {
            background-color: #333;
            color: white;
        }
        .panel {
            background-color: #222;
            border-color: #333;
        }
        .panel-body {
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">E-Commerce</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="software.php">Software</a></li>
                    <li class="active"><a href="music.php">Music</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="page-header">
            <h1 class="text-center">Music Albums</h1>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="image/thriller.jpg" style="width:100%">
                    <div class="caption">
                        <h4 class="pull-right">Php: 750</h4>
                        <h4>"Thriller"</h4>
                        <p>"Thriller" is the sixth studio album by American singer Michael Jackson, released on November 30, 1982. It features a mix of pop, post-disco, funk, and rock songs and became one of the best-selling albums of all time.</p>
                        <p class="text-right"><b>Artist: Michael Jackson</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="image/dark_moon.jpg" style="width:100%">
                    <div class="caption">
                        <h4 class="pull-right">Php: 670</h4>
                        <h4>"Dark Side of the Moon"</h4>
                        <p>"The Dark Side of the Moon" is the eighth studio album by the English rock band Pink Floyd, released on March 1, 1973. It is a concept album that explores themes such as conflict, greed, time, and mental illness.</p>
                        <p class="text-right"><b>Artist: Pink Floyd</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="image/rumours.jpg" style="width:100%">
                    <div class="caption">
                        <h4 class="pull-right">Php: 350</h4>
                        <h4>"Rumours"</h4>
                        <p>"Rumours" is the eleventh studio album by British-American rock band Fleetwood Mac, released on February 4, 1977. The album is famous for its catchy melodies, harmonies, and personal lyrics.</p>
                        <p class="text-right"><b>Artist: Fleetwood Mac</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="image/back_in_Black.png" style="width:100%">
                    <div class="caption">
                        <h4 class="pull-right">Php: 500</h4>
                        <h4>"Back in Black"</h4>
                        <p>"Back in Black" is the seventh studio album by Australian rock band AC/DC, released on July 25, 1980. It is one of the best-selling albums in music history and is known for its hard rock sound and iconic tracks like "You Shook Me All Night Long."</p>
                        <p class="text-right"><b>Artist: AC/DC</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
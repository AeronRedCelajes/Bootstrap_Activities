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
                    <li><a href="music.php">Music</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="page-header">
            <h1 class="text-center">Contact Me</h1>
        </div>
        <div>
            <section id="contact" style="background: silver;">
                <form class="col-md-5 col-md-offset-4">
                    <div class="form-group">
                        <input class="form-control" placeholder="Enter Your Name" type="text"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Enter Your E-mail" type="email"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Subject" type="text"/>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control rows="10">Comments</textarea>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success btn-block" type="submit"/>
                    </div>
                </form>
            </section>
        </div>
    </div>
</body>
</html>
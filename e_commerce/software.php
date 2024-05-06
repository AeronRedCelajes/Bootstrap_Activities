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
                    <li class="active"><a href="software.php">Software</a></li>
                    <li><a href="music.php">Music</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="page-header">
            <h1 class="text-center">Software</h1>
        </div>
        <div class="col-md-3">
            <div class="thumbnail">
                <img src="image/photoshop.png" style="width:100%">
                <div class="caption">
                    <h4 class="pull-right">Php: 1,500</h4>
                    <h4>Adobe Photoshop</h4>
                    <p>Adobe Photoshop is a raster graphics editor developed and published by Adobe Inc. It is widely used for image editing, 
                        retouching, creating image compositions, website mockups, and more.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="thumbnail">
                <img src="image/mircosoftOffice.png" style="width:100%">
                <div class="caption">
                    <h4 class="pull-right">Php: 800</h4>
                    <h4>Microsoft Office</h4>
                    <p>Microsoft Office is a suite of productivity applications that includes Word, Excel, PowerPoint, Outlook, and more.
                         It is used for various tasks such as document creation, data analysis, presentations, and email management.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="thumbnail">
                <img src="image/visualStudioCode.jpg" style="width:100%">
                <div class="caption">
                    <h4 class="pull-right">Php: 1,250</h4>
                    <h4>Visual Studio Code</h4>
                    <p>Visual Studio Code is a source-code editor developed by Microsoft for Windows, Linux, and macOS.
                         It includes support for debugging, embedded Git control, syntax highlighting, intelligent code completion, and more.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="thumbnail">
                <img src="image/autocad.png" style="width:100%">
                <div class="caption">
                    <h4 class="pull-right">Php: 1,000</h4>
                    <h4>AutoCAD</h4>
                    <p>AutoCAD is a commercial computer-aided design (CAD) and drafting software application developed and marketed by Autodesk. 
                        It is used in architecture, engineering, and construction industries to create 2D and 3D drawings.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Home</title>

	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	    <link rel="stylesheet" type="text/css" href="/css/style.css">

    </head>
    <body>
	    <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar_links">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!--<a href="http://localhost/chateauDaf/index.php" class="navbar-brand">
							<img id="logo" src="img/logo.png" alt="Logo">
						</a>-->
					</div>
                <div class="collapse navbar-collapse navbar-right" id="navbar_links">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="shiurim" class="dropdown-toggle">Shiurim<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="dailyDaf.php">Daily Daf</a></li>
									<li><a href="chumash.php">Chumash</a></li>
								</ul>
							</li>
							<li><a href="news.php">News Feed</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li class="dropdown">
								<a href="about" class="dropdown-toggle">About<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="bio.php">Bio</a></li>
									<li><a href="location.php">Location</a></li>
									<li><a href="contactUs.php">Contact Us</a></li>
								</ul>
							</li>
						</ul>
					</div>
            </div>
        </nav>

        <div class="jumbotron jumbotron-fixed-top">
            <div class="container">
                <a href="index.php">
                    <img id="logo" src="/img/logo.png" alt="Logo">
                </a>
            </div>
        </div>
        <div class="container" id="mainContainer">
    <div class="row">
        <div id="mainDiv">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img id="homePageImage" src="/img/dafYomi1.jpg" alt="Home Page Image">
                        <div class="carousel-caption">
                            <!--<h2>Learning the Daf</h2>-->
                        </div>
                    </div>

                    <div class="item">
                        <img id="homePageImage" src="/img/dafYomi2.jpg" alt="Daf Yomi 1">
                        <div class="carousel-caption">
                            <!--<h2>With a geshmak!</h2>-->
                        </div>
                    </div>

                    <div class="item">
                        <img id="homePageImage" src="/img/dafYomi3.jpg" alt="Daf Yomi 2">
                        <div class="carousel-caption">
                            <!--<h2>What a sight at 5:45AM!</h2>-->
                        </div>
                    </div>

                    <div class="item">
                        <img id="homePageImage" src="/img/dafYomi4.jpg" alt="Daf Yomi 2">
                        <div class="carousel-caption">
                            <!--<h2>Meet the champions of the shuir!</h2>-->
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
        <script id="jquery" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        {{--<script id="mainScript" src="./models/app.js"></script>--}}
        <span id="scripts">
	    </span>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>

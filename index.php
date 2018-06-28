<!DOCTYPE html>
<html>
<head>
	<title>eMobilis High School</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	    li a{
			padding: 20px;
			border-radius: 8px;
			margin-top: 20px;
		}
		ul{
			list-style-type: none;
			padding: 10px;
		}
		a{
			font-size: 15px;
			list-style-type: none;
		}
		body{
			background-repeat: no-repeat;
			background-size: cover;
			background-image: url();
			background-color: skyblue;
		}
		ul:hover{
			border-radius: 8px;
		}
		#foot{
			text-align: center;
			font-size: 20px;
		}
   		#footnav,ol{
   			text-align: right;
   		}
   		footer{
   			background-color: ;
   			background-image: url();
   			color: black;
   		}
   		nav{
   			background-image: url();
   		}
   		nav:hover{
   			background-image: url();
   		}
   		ol{
   			list-style-type: none;
   		}
   	    .navbar{
   	    	overflow: hidden;
   	    	position: fixed;
   	    	width: 100%;
   	    	top: 0;
   	    }
   	    .navbar li{
   	    	float: left;
   	    	display: block;
   	    	text-align: center;
   	    	padding: 10px 10px;
   	    	text-decoration: none;
   	    }
   	    .navbar li:hover{
   	    	color: black;
   	    }
   	    .main{
   	    	margin-top: 20px;
   	    }
   	    header{
   	    	text-align: center;
   	    	background-color: skyblue;
   	    	font-family: Chiller;
   	    }
	</style>
<body>
	<nav class="navbar navbar-inverse" class="navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand"> Emobilis</a>
			</div>
			<ul class="navbar-nav" class="navbar">
				<li><a href="#" class="active">Home</a></li>
				<li><a href="student.php">Student</a></li>
			</ul>
		</div>
	</nav>
	<br>
	<br>
	<header>
		<h1>eMobilis High School</h1>
		<p>Welcome to eMobilis</p>
	</header>
	<div class="jumbotron">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4">
					<img src="kidbake.jpeg" alt="a teacher writing on the board" class="img-thumbnail" width="300" height="250">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
				</div>				
				<div class="col-sm-4">
					<img src="reading.jpeg" alt="student reading" class="img-thumbnail" width="300" height="250">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
				</div>				
				<div class="col-sm-4" >
					<img src="girllibrary.jpeg" alt="girl in a library" class="img-thumbnail" width="300" height="250">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
				</div>
			</div>
		</div>
		<div>
    <div class="container-fluid">
			<p>Come join our institution.Some of our acivities are as below</p>	
			<br>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		    <li data-target="#myCarousel" data-slide-to="3"></li>
		  </ol>
		    <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="swimming.jpeg" alt="" width="100%" height="200px">
			    </div>

			    <div class="item">
			      <img src="laptop.jpeg" alt="" width="100%" height="200px">
			    </div>

			    <div class="item">
			      <img src="teacher.jpeg" alt="" width="100%" height="200px">
			    </div>

			    <div class="item">
			      <img src="bookshelf.jpeg" alt="" width="100%" height="200px">
			    </div>
	        </div>
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>	
         <hr>
	    </div>
	</div>
    <footer class="footer">
        <br>
        <div id="foot">
		For more information or if you have any questions,reach our office contacts below:<br>
		Tel:020 560 965 <br>
		Phone: +2547345978<br>
		Email:emobilis.org<br>
		Follow <a href=""></a> <br>
		</div>
	</footer>
</body>
</html>
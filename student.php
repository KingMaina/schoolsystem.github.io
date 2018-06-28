<!DOCTYPE html>
<html>
<head>
	<title>Exams</title>
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
			background-image: url();
			background-repeat: no-repeat;
			background-size: cover;
			font-family: Comic Sans MS;
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
   	    body{

   	    }
	</style>
<body>
	<nav class="navbar navbar-inverse" class="navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand"> Emobilis</a>
			</div>
			<ul class="navbar-nav" class="navbar">
				<li><a href="school.php">Home</a></li>
				<li><a href="#" class="active">Student</a></li>
			</ul>
		</div>
	</nav>
	<div>
		<hr>
		<br>
		<div class="jumbotron">
			<form action="output.php" method="POST">
				<fieldset>
					<h3>Student Exam Details</h3>
					<p>Enter Student exam details here below:</p>
					English:<br>
					<input type="text" name="eng" required="" placeholder="enter name here" required=""><br>
					Kiswahili:<br>
					<input type="text" name="swa" required="" placeholder="enter name here" required=""><br>
					Maths:<br>
					<input type="text" name="maths" required="" placeholder="enter name here" required=""><br>
				    Physics:<br>
					<input type="text" name="phyc" required="" placeholder="enter name here" required=""><br>
					Biology:<br>
					<input type="text" name="bio" required="" placeholder="enter name here" required=""><br>
					Geography:<br>
					<input type="text" name="geo" required="" placeholder="enter name here" required=""><br>
					<input type="SUBMIT" name="submit" value="SUBMIT">
					<input type="reset" name="reset" value="RESET">
				</fieldset>
			</form>
		</div>
	</div>
	<br>
	<hr>
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
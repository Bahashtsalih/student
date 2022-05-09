<!-- ?php
if(isset($_POST["submit"]))
{
    header('location:log.html');
}
?> -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title></title>
	<!-- bootstrap cdn -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
	<!-- font awesome cdn -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<!-- style.css -->
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<!-- jquery cdn -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script> 
    <style>

/*google font*/
@import url('https://fonts.googleapis.com/css?family=Poppins:400,700,800,900&display=swap');

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins',sans-serif;
}
.navbar{
	position: fixed;
	top: 0;
	z-index: 99999;
	padding:25px 0; 
}
.navbar .logo{
	font-size: 1.5em;
	text-transform: uppercase;
	font-weight: 750;
	letter-spacing: 2px;
}
.navbar ul.nav{
	margin-left: 20%; 
    font-size: 20px; 

   
}
.navbar ul.nav li.active,
.navbar ul.nav li:hover{
	background:#f05264;
    border-radius: 15px;
    border: none;


}
.navbar ul.nav li a{
	color: #fff;
	font-size: 1em;
	font-weight: 500;
}


/*slider*/
#carouselExampleIndicators{
	position: relative;
	height: 100vh;
	width: 100%;
}
#carouselExampleIndicators .carousel-inner{
	position: relative;
	height: 100%;
	width: 100%;
	background: #000;
}
#carouselExampleIndicators .carousel-inner:before{
	position: absolute;
	content: '';
	background: rgba(0, 0, 0, 0.45);
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	z-index: 1;
}
#carouselExampleIndicators .carousel-inner .carousel-item{
	position: relative;
	height: 100%;
	width:100%;
	background: url('./img/9.jpg');
	background-size: 100% 100%;
	background-position: center;
	background-attachment: fixed;
}
#carouselExampleIndicators .carousel-inner .carousel-item:nth-child(2){
	background: url('./img/8.jpg');
	background-size: 100% 100%;
	background-position: center;
	background-attachment: fixed;
}
#carouselExampleIndicators .carousel-inner .carousel-item:nth-child(3){
	background: url('./img/11.jpg');
	background-size: 100% 100%;
	background-position: center;
	background-attachment: fixed;
}

#carouselExampleIndicators .carousel-inner .carousel-item .info{
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	height: auto;
	width: 100%;
	z-index: 1;
	text-align: center;
}
#carouselExampleIndicators .carousel-inner .carousel-item h1{
	height: auto;
	color: #fff;
	width: 100%;
	z-index: 1;
	text-align: center;
	font-size: 4rem;

}
#carouselExampleIndicators .carousel-inner .carousel-item p{
	height: auto;
	color: #ccc;
	width: 100%;
	z-index: 1;
	text-align: center;
	font-size: 1.4rem;
	font-weight: 500;
}
#btn{
      
        border: 4px solid #f05264;
        color: rgb(255, 255, 255);
        width: 20%;
        height: 7%;
        border-radius: 10px;
        font-size: 30px;
       font-weight: 600;
       animation: colour 0.5s  1s infinite;
    }

    #btn:hover{
        box-shadow: 5px 8px 10px  rgb(138, 139, 139) ,  -5px -5px 10px  rgb(138, 139, 139);
        
        border: 4px solid #f3354b;
        background-color: #f3354b;
        transition: 0.5s;
    }

    </style>
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 navbar">
				<!-- <a href="index.html" class="logo navbar-brand text-white offset-md-2">Logo</a> -->
				<ul class="nav">
					<li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
					<li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
					<li class="nav-item"><a href="#" class="nav-link">Portfolio</a></li>     &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
					<li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
				</ul>
			</div>

			<!-- slider banner	 -->

			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			    	<div class="info">
                        <h1 >student feedback system</h1>
                        <p>welcome to student feedback system please first login then answer the questions</span> </p>
						<a href="log.php"><button class="btn btn-1" id="btn">Login</button></a> 
					
						<!-- <form method="POST" action="log.php">
							<input type="submit" name="submit" class="btn btn-1" id="btn" value="Login"/>
						  </form> -->
					
			      	</div>
			    </div>
			    <div class="carousel-item">
			    	<div class="info">
                        <h1 >student feedback system</h1>
                        <p>welcome to student feedback system please first login then answer the questions</span> </p>
                        <a href="log.php"><button class="btn btn-1" id="btn">Login</button></a> 
				
						<!-- <form method="POST" action="log.php">
							<input type="submit"class="btn btn-1" id="btn" name="submit" value="Login"/>
						  </form> -->
							</div>
			    </div>
			    <div class="carousel-item">
			    	<div class="info">
                        <h1 >student feedback system</h1>
                        <p>welcome to student feedback system please first login then answer the questions</span> </p>
						<a href="log.php"><button class="btn btn-1" id="btn">Login</button></a> 
			
						<!-- <form method="POST" action="log.php">
							<input type="submit" class="btn btn-1" id="btn" name="submit" value="Login"/>
						  </form> -->
							</div>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>



	<!-- scripts -->
	<!-- bootstrap javascript cdn -->
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script>
// 		function myFunction() {
//   window.open("log.php");
// }

	</script>

</body>
</html>
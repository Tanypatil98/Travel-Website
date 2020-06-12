<?php
	session_start();

?>
<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Lakshya Travel</title>
	<link rel="stylesheet" type="text/css" href="./home_files/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="./home_files/Home.css">
	<link rel="stylesheet" href="./home_files/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
	.mySlides {display:none;}
	</style>
	<style type="text/css">
			form{
	width: 250px;
	margin: 0 auto;
}
input[type='text'], input[type='number'], input[type='email'],
input[type='password'] {
     width: 200px;
     border-radius: 2px;
     border: 1px solid #CCC;
     padding: 10px;
     color: #333;
     font-size: 14px;
     margin-top: 10px;
}

a{
     color:#0067ab;
     text-decoration:none;
}
a:hover{
     text-decoration:underline;
}
.card{
	display: inline-flex;
}
.text-center{
	text-align: center !important;
}
input[type='submit']{
		-moz-user-select: none;
    -ms-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    display: inline-block;
    width: auto;
    text-decoration: none;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    border: 1px solid transparent;
    border-radius: 50px 20px;
    padding: 8px 15px;
    background-color: #557b97;
    color: #fff;
    font-family: "Antique Olive",sans-serif;
    font-style: normal;
    font-weight: 400;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    white-space: normal;
    font-size: 10px;
    margin-top: 20px;
    margin-bottom: 20px;
	}
	input[type='submit']:hover{
		opacity: 0.7;
	}
	.card{
		width: 60%;
		padding-left: 50px;
	}
	.mb-3{
		margin-left: 300px;
	}
	form{
		width: 400px;
	}
	label{
		width: 100px;
	}
	.n{
		padding-top: inherit;
		margin-top: 50px;
	}

@media only screen and (max-width: 1000px) {
			  .mb-3 {
			    width: 210px;
			    margin-right: 20px;
			    margin-left: 30px;
			  }
			  input[type='text'], input[type='number'], input[type='email'], input[type='password'] {
				    width: 150px;
				}
				form{
					width: 150px;
				}
				.card{
					padding-left: 0px;
				}
				.t{
					width: 120%;
				}
				.n{
					margin-top: 0px;
				}
			}
		</style>
</head>
<body>
	<div class="tab1">
		<div class="row">
			<div class="column-331">
				<a href="/lk/index.php"><img class="t" src="./home_files/Lakshya-logo.png"></a>
			</div>
			<div class="column-661">
				<h1><big><b>Lakshya Tours &amp; Travels</b></big></h1><b>
					<h4>Travels Company</h4>
			</b></div><b>
		</b></div><b>
	</b></div><b>
	<nav class="navbar navbar-expand-lg navbar-dark">
	  <a class="navbar-brand" href="/lk/index.php"><img src="./home_files/Lakshya-logo.png" width="90" height="30" alt=""></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="/lk/index.php">Home<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="/lk/Tour packages.html">Tour packages<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Info
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="/lk/about.html">About</a>
	          <a class="dropdown-item" href="/lk/Contact.php">Contact</a>
	        </div>
	      </li>
	      
	    </ul>
	  </div>
	</nav>
	<div class="tab">
	    <div class="d-flex justify-content-center">
		    <header>
			    <h1><BIG>Information</BIG></h1>
			</header>
		</div>
<?php
	$l= $_GET['length'];
	$a=$_GET['number'];
	$d=$_SESSION["date"];
	$p=$_GET['price'];
	$t=$_SESSION["bus"];
		?>
		<div class="card mb-3">
					  
					  <div class="card-body">
				
				<form action="inform.php" method="post" enctype="multipart/form-data">
					<label>Seat no.:</label>
					<input type="text" name="number" value=<?php echo $a; ?> disabled><br>
					<label>Date :</label>
					<input type="text" name="date" value=<?php echo $d; ?> disabled><br>
					<label>Price :</label>
					<input type="text" name="price" value=<?php echo $p; ?> disabled><br>
					<label>Name :</label>
					<input type="text" name="name" ><br>
					<label>Age :</label>
					<input type="number" name="age"><br>
					<label>Email :</label>
					<input type="email" name="email"><br>
					<label>Phone no.:</label>
					<input type="text" name="phone"><br>
					
						<input type="submit" name="Payment" class="btn1">
					
				</form>
			</div>
		</div>

					

		
	</div>
	<footer class="w3-container  w3-center w3-xlarge ">
		<div class="row">
			<div class="column">
				<a href="/index.php"><img class="t" src="./home_files/Lakshya-logo.png" ></a>
			</div>
			<div class="column">
			  <a class="btn n" href="#"><i class="fa fa-facebook-official"></i></a>
			  <a class="btn n" href="#"><i class="fa fa-google"></i></a>
			  <a class="btn n" href="#"><i class="fa fa-instagram"></i></a>
			  
			  <p class="w3-medium">
			  Powered by <a href="/lk/index.php" target="_blank">Lakshya Travel</a>
			  </p>
			</div>
		</div>
	</footer>
	
	<script src="./home_files/jquery.min.js.download"></script>
	<script src="./home_files/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="./home_files/popper.min.js.download" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="./home_files/bootstrap.min.js.download" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
    var queryString = new Array();
    $(function () {
        if (queryString.length == 0) {
            if (window.location.search.split('?').length > 1) {
                var params = window.location.search.split('?')[1].split('&');
               
                for (var i = 0; i < params.length; i++) {
                    var key = params[i].split('=')[0];
                    var value = decodeURIComponent(params[i].split('=')[1]);
                    queryString[key] = value;
                }
            }
        }
        if (queryString["number"] != null && queryString["price"] != null) {
            var data = "<u>Values from QueryString</u><br /><br />";
            data += "<b>Number:</b> " + queryString["number"] + " <b>Price:</b> " + queryString["price"] +"<b>Date:</b> " + queryString["date"]  +"<b>Length:</b> " + queryString["length"];
            
            var arr=queryString["number"].split(",");
           
        }
    });
</script>
</body>
</html>
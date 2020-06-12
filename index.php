<?php session_start(); ?>
<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Lakshya Travel</title>
	<link rel="stylesheet" href="./home_files/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="./home.css">
	<link rel="stylesheet" href="./home_files/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<style>
	.mySlides {display:none;}
	.n{
		padding-top: inherit;
		margin-top: 50px;
	}
	.la{
		margin-top: 50px;
	}
	.da{
		display: inline-block;
	}


@media only screen and (max-width: 1000px) {
	.t{
					width: 120%;
				}
				.n{
					margin-top: 0px;
				}
				.HzQf{
		width: 200px;
	}
	input[type="text"]{
		margin-left: -5px;
		width: 200px;
	}
	.mb-3{
		margin-top: 1px;
		margin-left: 1px;
		width: 250px;
	}
	header{
		    margin-bottom: 50px;
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
	  <a class="navbar-brand" href="/index.php"><img src="./home_files/Lakshya-logo.png" width="90" height="30" alt=""></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="./Tour packages.html">Tour packages<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Info
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="./about.html">About</a>
	          <a class="dropdown-item" href="./Contact.php">Contact</a>
	        </div>
	      </li>
	      
	    </ul>
	  </div>
	</nav>
	<div class="tab">
		<div class="d-flex justify-content-center">
		    <header>
			    <h1><big>Lakshya Travels</big></h1>
			</header>
		</div>
		<div class="d-flex justify-content-center">
		    
			    <h2>Welcome to <i>Lakshya Travels</i></h2>
			
		</div>
		<div class="container">
			<div class="row">
				<div class="column-33">
					<div class="card mb-3">
					  <img class="card-img-top" src="./home_files/Lakshya-logo.png" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title"><b>Booking</b></h5>
					    <form id="myform" action="chosse.php" id="basic-form" method="post">
						    <div class="HzQf">
						    	<div class="pure-radiobutton bus-triptype-radio">
						    		<input type="radio" id="oneWay" name="tripType" class="radio" value="one" required>
						    		<label for="oneWay" id="1">
						    			
						    			One Way
						    			
						    		</label>
						    	
						    	</div>
						    	<div class="pure-radiobutton bus-triptype-radio">
						    		<input type="radio" id="roundTrip" name="tripType" class="radio" value="two">
						    		<label for="roundTrip">
						    			
						    			Round Trip
						    			
						    		</label>
						    	</div>
						    </div>
						   <div class="col-xs-2">
							    <div class="_31PN">
							    	<span>
							    		<div class="fl-input-container">
							    			<input type="text" visible="true" autocomplete="off" list="brow" onkeyup="ac(this.value)" class="fl-input" id="text-box1" value="" tabindex="0" name="from" required="">
							    			<?php
													$db=mysqli_connect('localhost','root','','user');
													$sql="SELECT DISTINCT Start FROM `match`";
													$result=mysqli_query($db,$sql);
													$re=mysqli_num_rows($result);
													$t=array();
													$a=array();
													for ($i=0; $i <$re ; $i++) { 
														$row=mysqli_fetch_array($result);
														
														$t[$i]=$row['Start'];
													}
													
													foreach ($t as $key => $value) {
															$a[$key]= $value;
														}	
														?>
						    				
													
													<!-- On keyup calls the function everytime a key is released -->
														<datalist id="brow"> 
													<?php for ($i=0; $i < $re ; $i++) { ?>
														
													
														<option value=<?php echo $a[$i]; ?>></option>
														<?php } ?>
														<!-- This data list will be edited through javascript     -->
														</datalist>
							    			<label class="fl-input-label" for="text-box">from</label>
							    			<span class="fl-input-bar">
							   				</span>
							   			</div>
							   		</span>
							   	</div>
						    </div><br>
						    <div class="la">
						    	<img  src="./home_files/cce6cd0a.png" alt="Card image cap">
						    </div><br>
						    <div class="col-xs-2">
						    	<div class="_31PN">
						    		<span>
						    			<div class="fl-input-container">
						    				<input type="text" visible="true" autocomplete="off" list="brow" onkeyup="ac(this.value)" class="fl-input" id="text-box1" value="" tabindex="0" name="to" required="">
						    				<!--<script type="text/javascript"> 
													    var tags = [  
													    "Surat","Saputara","Nashik","Shirdi" 
													      ]; 
													  
													      /*list of available options*/ 
													     var n= tags.length; //length of datalist tags     
													  
													     function ac(value) { 
													        document.getElementById('datalist').innerHTML = ''; 
													         //setting datalist empty at the start of function 
													         //if we skip this step, same name will be repeated 
													           
													         l=value.length; 
													         //input query length 
													     for (var i = 0; i<n; i++) { 
													         if(((tags[i].toLowerCase()).indexOf(value.toLowerCase()))>-1) 
													         { 
													             //comparing if input string is existing in tags[i] string 
													  
													             var node = document.createElement("option"); 
													             var val = document.createTextNode(tags[i]); 
													              node.appendChild(val); 
													  
													               document.getElementById("datalist").appendChild(node); 
													                   //creating and appending new elements in data list 
													             } 
													         } 
													     } 
													   
													</script>-->
													<!-- On keyup calls the function everytime a key is released -->
														<!--<datalist id="datalist1"> 
														  
														<option value="Surat"></option> 
														<option value="Saputara"></option> 
														<option value="Nashik"></option> 
														<option value="Shirdi"></option> 
														 
														  
														
														</datalist>-->
							    			<label class="fl-input-label" for="text-box">To</label>
							    			<span class="fl-input-bar">
							    			</span>
							    		</div>
							   		</span>
							   	</div>
						    </div><br>
						    <div class="da">
						    	<b>Date:</b><input type="text" id="datepicker" name="Date" required="">
						    </div>
						    
						    	<div class="row">
									<div class="col-1">
										<input type="Submit" name="Submit" id="enter" value="Submit">
										<output aria-live="polite"></output>
									</div>
								</div>
						    </form>
					  </div>
					</div>
				</div>
				<div class="column-66">	
					<div class="ta">
						<div class="w3-content w3-display-container">
							<img class="mySlides" src="./home_files/servicebus.png" style="width: 100%; display: block;">
						    <img class="mySlides" src="./home_files/slide03.png" style="width: 100%; display: none;">
					    	<img class="mySlides" src="./home_files/Slider_03.png" style="width: 100%; display: none;">
							<img class="mySlides" src="./home_files/Slider_04.png" style="width: 100%; display: none;">
							<img class="mySlides" src="./home_files/Lakshya-logo.png" style="width: 100%; display: none;">

							<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">❮</button>
							<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">❯</button>
						</div>

							<script>
							var slideIndex = 1;
							showDivs(slideIndex);

							function plusDivs(n) {
							  showDivs(slideIndex += n);
							}

							function showDivs(n) {
							  var i;
							  var x = document.getElementsByClassName("mySlides");
							  if (n > x.length) {slideIndex = 1}
							  if (n < 1) {slideIndex = x.length}
							  for (i = 0; i < x.length; i++) {
							    x[i].style.display = "none";  
							  }
							  x[slideIndex-1].style.display = "block";  
							}
							</script>
					</div>
				</div>
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
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
    	autoclose: true,
    	todayHighligth: true,
    	showOtherMonths: true,
    	selectOtherMonths: true,
    	autoclose: true,
    	changeMonth: true,
    	changeYear: true,
    	minDate:new Date()

    });
  } );
  $(document).ready(function() {
  $("#basic-form").validate();
});
  </script>
</body>
</html>
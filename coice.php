<?php

	$radio=$from=$to=$time=$new_date=$result4='';
	$errors=array();

	$db=mysqli_connect('localhost','root','','user');
	if(isset($_GET['Date'])){
		$bus2=$_GET['l'];
		$date=$_GET['Date'];
		
		
		$t=array();
		$ava=array();
		$sql1="SELECT * FROM bus WHERE Bus_number='$bus2' AND CDate='$date' ";
		$result1=mysqli_query($db,$sql1);
		$re=mysqli_num_rows($result1);
		
		if($re > 0 ){
			$sql3="SELECT Seat,Status FROM seat WHERE Bus_number='$bus2' AND CDate='$date'";
		
		$result4=mysqli_query($db,$sql3);
			$row3=mysqli_num_rows($result4);
			
			$j=0;
			for ($i=0; $i < $row3 ; $i++) { 
			$row1=mysqli_fetch_array($result4);
			if($row1['Status'] == "Not-Available"){
				$ava[$j]=$row1['Seat'];
				
				$j++;
			}else{											
			$t[$i]=$row1['Seat'];
				
			}
			}
		$sa=json_encode($ava);
	$ka=json_encode($t);	

	}else{
		$echo1= "<div class='container'>
		 <div class='alert alert-danger'> Bus Not Available On This Date.</div>
		 </div>";
	}
	}
	if (isset($_POST['Submit'])) {
		
		$from=mysqli_real_escape_string($db,$_POST['from']);
		//echo $from;
		$to=mysqli_real_escape_string($db,$_POST['to']);
		//echo $to;
	$time = strtotime($_POST['Date']);
	if ($time) {
	  $new_date = date('Y-m-d', $time);
	  //echo $new_date;
	} else {
	   echo 'Invalid Date: ' . $_POST['dateFrom'];
	  // fix it.
	}
	
	if(isset($_POST['tripType'])){
		$radio=$_POST['tripType'];
	}
	if(empty($radio)){
		array_push($errors, "Radio is required");
	}
	if(empty($from)){
		array_push($errors, "from is required");
	}
	if(empty($to)){
		array_push($errors, "to is required");
	}
	if(empty($new_date)){
		array_push($errors, "date is required");
	}
	if(count($errors)==0){

		$sql="SELECT * FROM match WHERE Start='$from' AND Destin='$to'";
		$result=mysqli_query($db,$sql);
			$_SESSION["from"]=$from;
			$_SESSION["to"]=$to;
			$_SESSION["radio"]=$radio;
			
			//header('location:coice.php');
			
		//}else{
			//header('location:home.html');
		//}
		}
}

?>
<?php
	session_start();
	
	$r=$_GET['r'];
	$l=$_GET['l'];
	$sql2="SELECT Name FROM bus WHERE Bus_number='$l'";
	$res=mysqli_query($db,$sql2);
	$ro=mysqli_fetch_assoc($res);
	$pre=$ro['Name'];

?>

<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Lakshya Travel</title>
	<link rel="stylesheet" href="./home_files/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="./home_files/Home.css">
	<link rel="stylesheet" href="./home_files/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

	<style>
	.mySlides {display:none;}
	label{
		margin-left: 50px;
	}
	table {
  border: 1px solid black;
  width: 80%;
  margin-left: 40px;
}
th{
	width: 20%;
}
td{
	padding-left: 10px;
	padding-top: 10px;
	padding-bottom: 10px;
}
.column-49 {
  float: left;
  width: 50%;
  padding: 15px;
}
.column-50 {
  
 width: 50%;
  padding: 15px;
}
.se{
	padding: 5px;
	width: 80%;
	height: 100px;
}
.n{
		padding-top: inherit;
		margin-top: 50px;
	}
@media screen and (max-width: 1000px) {
	h4{
		padding-left: 10px;
	}
.column-49,
  .column-50 {
    width: 100%;
    
    height: 100%;
    padding-left: inherit;
  }
  .pb{
  	width: 50%;
  }
  .se{
  	width: 90%;
  	height: 50px;
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
			</b></div>
		</div>
	</div>
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
			    <h1><BIG>Book Seat</BIG></h1>
			</header>
		</div>

<div class="container">
	<div class="row">
		<label><strong>Trip : <?php  echo $r; ?></strong></label>
		<label><strong>From : <?php echo $_SESSION["from"]; ?></strong></label>
		<label><strong>To : <?php echo $_SESSION["to"]; ?></strong></label>
		<label><strong>Date : <?php echo $_SESSION["date"]; ?></strong></label>
		<label><strong id="price">Price :
			<?php
		$sql='SELECT * FROM `match` WHERE Start="'.$_SESSION["from"].'" AND Destin="'.$_SESSION["to"].'"AND Cname="'.$pre.'"';
		$result=mysqli_query($db,$sql);
			while($row=mysqli_fetch_array($result)){
			if($_SESSION["radio"]=="two"){
				$t= $row['price']+$row['price'];
			 echo $t; 
			}else{
			 $t= $row['price'];
			 echo $t;} ?>
		</strong></label>
			<?php }
			$pr=$t;
			?>
		</div>
		<hr>
	<div class="row" >
		<img src="./img/icons8-blue-square-96.png" style="width: 20px;height: 20px;">
		<label style="margin-left: 10px;margin-right: 20px;">Booked</label>
		<img src="./img/icons8-green-square-96.png" style="width: 20px;height: 20px;">
		<label style="margin-left: 10px;margin-right: 20px;">Available</label>
		<img src="./img/icons8-red-square-96.png" style="width: 20px;height: 20px;">
		<label style="margin-left: 10px;margin-right: 20px;">Not Available</label>

</div>
<div class="wor"><p style="color: red;">Please Select Seat</p></div>
<div>
	<label>Seat no.:</label>
	<input type="text"  name="" id="myInput" disabled>
	<label>price:</label>
	<input type="text"  name="" id="myprice"  disabled>
	<button> Processed </button>
	</div>

	</div>
	<div class="container">
<div class="row">
	<div class="column-49">
		<h2>Lowercase</h2>
		<table>
			<tr>
				<th> </th>
				<th> </th>
				<th> </th>
				<th><img class="pb" src="./img/icons8-steering-wheel-80.png"></th>
			</tr>
			<tr>
				<td><input type="button" class="se" name="" value="1" data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="5" data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="6"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
			<tr>
				<td><input type="button" class="se" name="" value="7" data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="11"  data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="12"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
			<tr>
				<td><input type="button" class="se" name="" value="13"  data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="17"  data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="18"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
			<tr>
				<td><input type="button" class="se" name="" value="19"  data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="23"  data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="24"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
			<tr>
				<td><input type="button" class="se" name="" value="25"  data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="29"  data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="30"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
			<tr>
				<td><input type="button" class="se" name="" value="31"  data-price=<?php echo $t; ?> ></td>
				<td><?php if ($_SESSION["seat"]=="38") {?>
					<input type="button" class="se" name="" value="37"  data-price=<?php echo $t; ?> >
				<?php } ?></td>
				<td><input type="button" class="se" name="" value="35"  data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="36"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
		</table>
	</div>
	<div class="column-50">
		<h2>Uppercase</h2>
		<table>
			<tr>
				<th> </th>
				<th> </th>
				<th> </th>
				<th><img class="pb" src="./img/icons8-steering-wheel-80.png"></th>
			</tr>
			<tr>
				<td><input type="button" class="se" name="" value="2" data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="3" data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="4" data-price=<?php echo $t; ?> ></td>
			</tr>
			
			<tr>
				<td><input type="button" class="se" name="" value="8" data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="9" data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="10"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
			<tr>
				<td><input type="button" class="se" name="" value="14"  data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="15"  data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="16"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
			<tr>
				<td><input type="button" class="se" name="" value="20"  data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="21"  data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="22"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
			<tr>
				<td><input type="button" class="se" name="" value="26"  data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="27"  data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="28"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
			<tr>
				<td><input type="button" class="se" name="" value="32"  data-price=<?php echo $t; ?> ></td>
				<td><?php if ($_SESSION["seat"]=="38") {?>
					<input type="button" class="se" name="" value="38"  data-price=<?php echo $t; ?> >
				<?php } ?> </td>
				<td><input type="button" class="se" name="" value="33"  data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="34"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
		</table>
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
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
	<script src="./home_files/popper.min.js.download" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="./home_files/bootstrap.min.js.download" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
	var i = [];
	
	var total=0;
	var pri=0;
	var t = [];
$( document ).ready(function() {

            $('.se').each(function(elem) {
            	
            $(this).click(function(e) {
            	if($(this).hasClass('click')){
            		$(this).css('background-color','');
            		
            		var y=i;
            		console.log(i);
            		var remove_Item = $(this).val();
            		y = $.grep(y, function(value) {
					  return value != remove_Item;
					});
					$('#myInput').val('');
					$('#myInput').val(function(){
                 	return this.value + y +',';
                 	});
                 	console.log(y);
                 	 
					i=y;
                 	
                 	total=total - pri;
                 	$('#myprice').val('');
                 $('#myprice').val(function(){
                 	return this.value + total ;
                 });
                 	if (total==0) {
                 		$('#myInput').val('');

                 	}
            		$(this).removeClass('click');
            	}else{
            		
            		$(this).css('background-color','green');
                 i.push($(this).val());
                 var number=$(this).val();
                 var price=$(this).data(price);
                 $.each(price, function(key, value) { 
				   pri=value;
				});

                 total=pri + total;

                 $('#myInput').val(function(){
                 	return this.value + number +',';
                 })
                 $('#myprice').val('');
                 $('#myprice').val(function(){
                 	return this.value + total ;
                 });
              	$(this).addClass('click');
                 
            	}
            }); 
          });
             
});
 

 var rd='<?php echo $sa; ?>';
         

	$('.se').each(function(elem) {
	for (var i = 0; i < rd.length; i++) {
		if (rd[i] == $(this).val()) {
			$(this).prop('disabled','true');
			$(this).css('background-color','red');
			$(this).css('cursor','no-drop');
		}
	}
});


var tan='<?php echo $ka; ?>';
var k=jQuery.parseJSON(tan);
	
$('.se').each(function(elem) {
	for (var i = 0; i < tan.length; i++) {
		if (k[i] == $(this).val()) {
			$(this).prop('disabled','true');
			$(this).css('background-color','royalblue');
			$(this).css('cursor','no-drop');
		}
	}
});


$('.wor').hide();
$("button").click(function(){
				var length=i.length;
				var number=$('#myInput').val();
				var price=$('#myprice').val();
				
				if ($('#myprice').val()==0 & $('#myInput').val()=='') {
					$('.wor').show();
				}else{
			     var url = "inform.php?number=" + encodeURIComponent(number) + "&price=" + encodeURIComponent(price)+ "&length=" + encodeURIComponent(length) ;
				
            window.location.href = url;
        }
			  });
</script>
</body>
</html>
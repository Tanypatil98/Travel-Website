<?php
	session_start();
	$radio=$from=$to=$time=$new_date='';
	$errors=array();

	$db=mysqli_connect('localhost','root','','user');
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

.btn1{
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
    
    margin-bottom: 20px;
  }
  .btn1:hover{
    opacity: 0.7;
  }
.table-responsive{
	width: 90%;
}
.n{
		padding-top: inherit;
		margin-top: 50px;
	}

@media screen and (max-width: 1000px) {
	h4{
		padding-left: 10px;
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
	          <a class="dropdown-item" href="/lk/Contact.php ">Contact</a>
	        </div>
	      </li>
	      
	    </ul>
	  </div>
	</nav>

<div class="tab">
	    <div class="d-flex justify-content-center">
		    <header>
			    <h1><BIG>Bus</BIG></h1>
			</header>
		</div>

<div class="container">
	<div class="row">
		<label><strong>Trip : <?php echo $_SESSION["radio"]; ?></strong></label>
		<label><strong>From : <?php echo $_SESSION["from"]; ?></strong></label>
		<label><strong>To : <?php echo $_SESSION["to"]; ?></strong></label>
		<label><strong>Date : <?php echo $new_date; ?></strong></label>
		<!--<label style="display: none;"><strong id="price">Price : 
			/*<?php
		//$sql='SELECT * FROM `match` where Start="'.$_SESSION["from"].'"'.' and Destin="'.$_SESSION["to"].'"';
		//$result=mysqli_query($db,$sql);
			//while($row=mysqli_fetch_array($result)){
			//if($_SESSION["radio"]=="two"){
			//	$t= $row['price']+$row['price'];
			// echo $t; 
			//}else{
			// $t= $row['price'];
			// echo $t;} ?>
		</strong></label>-->
			
		</div>
		<hr>
	</div>
	<?php
// core.php holds pagination variables

 
// include database and object files
include_once 'database.php';
include_once 'product.php';

 
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
 
$product = new Product($db);

 
// specify the page where paging is used
$page_url = "chosse.php?";
 
// count total rows - used for pagination
$total_rows=$product->buscountAll();


// display the products if there are any
if($total_rows>0){
 
     echo "<table class='table table-hover table-responsive table-bordered'>";
        echo "<tr>";
            echo "<th>Image</th>";
            echo "<th>Name</th>";
            echo "<th>Seat</th>";
            echo "<th>Date</th>";
            echo "<th>Time</th>";
            echo "<th>Price</th>";
            echo "<th>Action</th>";
        echo "</tr>";
        $n=$b=$s=$d=$t=$l='';
        $db=mysqli_connect('localhost','root','','user');
 		$sql1="SELECT * FROM bus WHERE Cdate='$new_date'";
 		$result1=mysqli_query($db,$sql1);
 		$re=mysqli_num_rows($result1);
        while ($row = mysqli_fetch_assoc($result1)){
 
           $n=$row['Name'];
           $b=$row['Bus_number'];
           $s=$row['Seat'];
           $d=$row['Cdate'];
           $t=$row['Ctime'];
 			$sql2="SELECT price FROM `match` WHERE Cname='$n' AND Start='$from' AND Destin='$to'";
 		$result2=mysqli_query($db,$sql2);
 		$row1=mysqli_fetch_assoc($result2);
            echo "<tr>";
                echo "<td><img src='patner/upload/".$row['Image']."' style='width:100px; height:100px;' /></td>";
                echo "<td>".$row['Name']."</td>";
                echo "<td>".$row['Seat']."</td>";
                echo "<td>".$row['Cdate']."</td>";
                echo "<td>".$row['Ctime']."</td>";
                echo "<td>".$row1['price']."</td>";
                echo "<td>";
                echo "<a class='btn1' href='coice.php?r=".$radio."&Date=".$new_date."&l=".$b."' >Book</a>";
                echo "</td>";
 
            echo "</tr>";
 
        }
        $l=$b;
        $_SESSION["bus"]=$b;
         $_SESSION["date"]=$new_date;
 		$_SESSION["seat"]=$s;
    echo "</table>";
 		if ($re == 0) {
 			echo "<div class='container'>";
    echo "<div class='alert alert-danger'>No Result found.</div>";
    echo "</div>";
 		}
    // paging buttons
    
}
 
// tell the user there are no products
else{
	echo "<div class='container'>";
    echo "<div class='alert alert-danger'>No products found.</div>";
    echo "</div>";
}
?>
</div>




	<footer class="w3-container  w3-center w3-xlarge ">
		<div class="row">
			<div class="column">
				<a href="/index.php"><img class="t" src="./home_files/Lakshya-logo.png" style="width:50%"></a>
			</div>
			<div class="column">
			  <a class="btn" href="#"><i class="fa fa-facebook-official"></i></a>
			  <a class="btn" href="#"><i class="fa fa-google"></i></a>
			  <a class="btn" href="#"><i class="fa fa-instagram"></i></a>
			  <a class="btn" href="#"><i class="fa fa-twitter"></i></a>
			  <a class="btn" href="#"><i class="fa fa-linkedin"></i></a>
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
	
</body>
</html>
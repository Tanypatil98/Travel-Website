<?php 
	$echo=$echo1=$echo2='';
		if(isset($_POST['sendmail'])) {
			$echo=$echo1=$echo2='';
			require 'PHPMailerAutoload.php';
			require 'credential.php';

			$mail = new PHPMailer;
			$to='travel_email';
			 //$mail->SMTPDebug = 4;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = EMAIL;                 // SMTP username
			$mail->Password = PASS;                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom(EMAIL, 'Lakshya Travels');
			$mail->addAddress($to);     // Add a recipient

			$mail->addReplyTo(EMAIL);
			// print_r($_FILES['file']); exit;
			/*for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
				$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
			}*/
			$mail->isHTML(true);          
			                        // Set email format to HTML
			$name=$_POST['fname']." ".$_POST['lname'];
			$mail->Subject = $_POST['subject'];
			$mail->Body    = '<div style="border:2px solid red;">This is the message from <b>'.$name.'</b></div>
			<div>'.$_POST['msg'].'</div>';
			$mail->AltBody = $_POST['msg'];

			if(!$mail->send()) {
			    $echo1= 'Message could not be sent.';
			    $echo2= 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    
			    $echo='Message has been sent';
			}
		}
	 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Contact Us</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Contact.css">
	<link rel="stylesheet" href="./home_files/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<style type="text/css">
		
	.row{
		margin-left: 150px;
	}
@media only screen and (max-width: 1000px) {
	form{
		width: 230px;
	}
	.row{
		margin-left: -25px;
	}
	h4{
		padding-left: 1px;
	}
	.card-img-top{
		margin: 0px;
	}
	.mb-3{
		width: 200px;
	}
}
	</style>
</head>
<body>
	<div class="tab1">
		<div class="row">
			<div class="column-33">
				<a href="/lk/index.php"><img class="t" src="/lk/img/Lakshya-logo.png"></a>
			</div>
			<div class="column-66">
				<h1><BIG><B>Lakshya Tours & Travels</BIG></h1>
							<h4>Travels Company</h4>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ">
	  <a class="navbar-brand nav-link" href="‪/lk/index.php"><img src="/lk/img/Lakshya-logo.png" width="90" height="30" alt="" ></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="/lk/index.php">Home<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="/Tour packages.html">Tour packages<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Info
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="/about.html">About</a>
	          <a class="dropdown-item" href="#">Contact</a>
	        </div>
	      </li>
	      
	    </ul>
	  </div>
	</nav>
	<div class="tab">
	    <div class="d-flex justify-content-center">
		    <header>
			    <h1><BIG>Contact Us</BIG></h1>
			</header>
		</div>
		<div class="card mb-3">
		  <img class="card-img-top" src="/lk/img/Lakshya-logo.png" alt="Card image cap">
		  <div class="card-body">
				
					
					
					<div class="row">
    <div class="col-md-9 col-md-offset-2">
        <form role="form" method="post" enctype="multipart/form-data">
        	<?php echo $echo; ?>
					<?php echo $echo1; ?>
					<?php echo $echo2; ?>
        	<div class="row">
						<div class="col-sm-9 form-group">
							<label>First Name</label>
							<input type="text" name="fname" class="form-control" placeholder="Tonu">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-9 form-group">
							<label>Last Name</label>
							<input type="text" name="lname" class="form-control" placeholder="Abc">
						</div>
					</div>
        	<div class="row">
                <div class="col-sm-9 form-group">
                    <label for="email">To Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" maxlength="50">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" id="subject" name="subject" value="Test Mail with attachments" maxlength="50">
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="name">Message:</label>
                    <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="4">Test mail using PHPMailer</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="name">File:</label>
                    <input name="file[]" multiple="multiple" class="form-control" type="file" id="file">
                </div>
            </div>
             <div class="row">
                <div class="col-sm-9 form-group">
                    <button type="submit" name="sendmail" class="btn1 btn1-lg btn-success btn-block">Send</button>
                </div>
            </div>
        </form>
	</div>

				</div>
			</div>
		</div>
	</div>










	<footer class="w3-container  w3-center w3-xlarge ">
		<div class="row">
			<div class="column">
				<a href="/lk/index.php"><img class="t" src="/lk/img/Lakshya-logo.png" ></a>
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


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

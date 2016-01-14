<?php
    error_reporting(0);

	if ($_POST["submit"]) {

		$result='<div class="alert alert-success">Form submitted</div>';
	
		if(!$_POST['name']){
			$error.="<br /> Please enter your name";
		}
		if(!$_POST['email']){
			$error.="<br /> Please enter your email address";
		}
		if(!$_POST['comment']){
			$error.="<br /> Please enter your comment";
		}

		if($_POST['email'] AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			$error.="<br /> Please enter a valid email address";
		}

		if($error){
			$result='<div class="alert alert-danger"><strong>There were errors in your form: </strong>'.$error.'</div>';
		}else{
			if(mail("hkap@mail.scand", "Comment from website!", "Name: ".$_POST['name']."

Email: ".$_POST['email']."

Comment: ".$_POST['comment'])){			
				$result='<div class="alert alert-success"><strong>Thank you!</strong> I\'ll be in touch.</div>';
			}else{
				$result='<div class="alert alert-success">Sorry, there was an error during sending email.</div>';
			}
		}
	}

?>

<!doctype html>
<html>
<head>
	<title>PHP Send Email</title>
	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">	

	<style>
		.emailForm{
			border:1px solid gray;
			border-radius:10px;
			margin-top: 20px;
		}
		textarea{
			height:120px;	
		}
		.btn-submit{
			float:right;
			margin-bottom: 10px;
		}
		.requiredGliph{
			color: red;	
			font-size: 0.6em;	
			vertical-align: top;
		}
	</style>
</head>
<body>	
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 emailForm">
				<h1>My email form</h1>

				<?php echo $result; ?>

				<p class="lead">Please, get in touch - I'll get back to you as soon as I can.</p>
				<form method="post">
					<div class="form-group">
						<label for="name">Your Name<span class="glyphicon glyphicon-star requiredGliph"></span>: </label>
						<input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name']; ?>" />
					</div>
					<div class="form-group">
						<label for="email">Your Email<span class="glyphicon glyphicon-star requiredGliph"></span>: </label>
						<input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']; ?>" />
					</div>
					<div class="form-group">
						<label for="comment">Your Comment: </label>
						<textarea name="comment" class="form-control"><?php echo $_POST['comment']; ?></textarea>
					</div>
					<input type="submit" name="submit" class="btn btn-success btn-lg btn-submit" value="Submit" />
				</form>
			</div>	
		</div>
	</div>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>
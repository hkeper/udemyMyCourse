<!doctype html>
<html>
<head>
	<title>PHP Send Email</title>
	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
	<div>
		<?php
			$emailTo="";	
			$subject="I hope this works!";
			$body="I think this greate!";
			$headers="From: hkeper1@gmail.com";

			if(mail($emailTo, $subject, $body, $headers)){
				echo "Mail sent!";
			}else{
				echo "Mail not sent!";
			}
		?>
	</div>
</body>
</html>
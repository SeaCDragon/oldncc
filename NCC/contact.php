<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'From ncownersrep.com'; 
		$to = 'alvinle21@gmail.com'; 
		$subject = 'Ncownersrep Contact Page';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter a message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'You might be a robot';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank you for contacting us</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<script src="js/pace.min.js"></script>
		<link href="css/pace-theme-flat-top.css" rel="stylesheet">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0">
		<title>Nathan Cheng Consulting</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
		<script src="js/script.js"></script>
	</head>

	<body>
		<section class="navbar2">
			<div class="logo">
				<a href="index.html"><font face='calibri'>Nathan Cheng Consulting, Inc.<font size="3"><p style="line-height: 0px;" /><i>professional services</i></p></font></br></font></a>
			</div>
			<div class="contactTab tabs hvr-underline-from-center">
				<a href="contact.php">Contact</a>
			</div>
			<div class="teamTab tabs hvr-underline-from-center">
				<a href="team.html">Team</a>
			</div>
		</section>
		<section class="landing">	
			<div class="pageTitle">Contact Us</div>
			<div class="row">
				<div class="contactPage">
					<div class="col-md-6">
						<div class="contactInfo">
							Nathan Cheng Consulting, Inc.
							<br>3030 Bridgeway, Suite: 405</br>
							Sausalito, CA 94965
							<br></br>
							Email: info@ncownersrep.com
						</div>
					</div>
					<div class="col-md-6">
						<form class="form-horizontal" role="form" method="post" action="contact.php">
							<div class="form-group">
								<label for="name" class="col-sm-2 control-label">Name</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
									<?php echo "<p class='text-danger'>$errName</p>";?>
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
									<?php echo "<p class='text-danger'>$errEmail</p>";?>
								</div>
							</div>
							<div class="form-group">
								<label for="message" class="col-sm-2 control-label">Message</label>
								<div class="col-sm-10">
									<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
									<?php echo "<p class='text-danger'>$errMessage</p>";?>
								</div>
							</div>
							<div class="form-group">
								<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
									<?php echo "<p class='text-danger'>$errHuman</p>";?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-2">
									<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-2">
									<?php echo $result; ?>	
								</div>
							</div>
						</form> 
					</div>
				</div>
			</div>
			<section class="footer">
				<center>© Nathan Cheng Consulting, Inc.</center>
			</section>
		</section>
	</body>

</html>
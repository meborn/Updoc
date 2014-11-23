<?php
if($_POST["message"]) {
    mail("mneborn@gmail.com", "Form to email message", $_POST["message"], "From: meborn@dmail.dixie.edu");
}
?>
<!DOCTYPE>
<html>
	<head>

	</head>
	<body>
		<form method="post" action="contact.php">
			<textarea name="message"></textarea>
			<input type="submit">
		</form>
	</body>
</html>
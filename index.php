<?php
 $name = $_POST['name'];
 $visitor_email = $_POST['email'];
 $message = $_POST['message'];
?>
<form method="post" name="myemailform" action="form-to-email.php">

Enter Name:	<input type="text" name="name">

Enter Email Address:	<input type="text" name="email">

Enter Message:	<textarea name="message"></textarea>

<input type="submit" value="Send Form">
</form>

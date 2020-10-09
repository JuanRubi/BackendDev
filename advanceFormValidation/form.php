<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Advance Validation</title>
</head>

<body>
	<h3>Advance Form Validation</h3>
	<p>This form is validated using jQuery validation plugin and phoneUS.</p>
	
	<!-----------------------		Form Creation		---------------------->
    <form action="" method="post" id="form">
		<fieldset>
			
			<label for="name">Name: <em>*</em></label>
			<input type="text" name="name" id="name" class="required" value="<?php echo $form['name']; ?>">
			<?php echo $error['name']; ?>
				
			<label for="phone">Phone (000-000-0000): <em>*</em></label>
			<input type="text" name="phone" id="phone" class="required phoneUS" value="<?php echo $form['phone']; ?>">
			<?php echo $error['phone']; ?>
				
			<label for="fax">Fax (000-000-0000):</label>
			<input type="text" name="fax" id="fax" value="<?php echo $form['fax']; ?>">
				
			<label for="email">Email: <em>*</em></label>
			<input type="text" name="email" id="email" class="required email" value="<?php echo $form['email']; ?>">
			<?php echo $error['email']; ?>
				
			<label for="comments">Comments:</label>
			<textarea name="comments" id="comments"><?php echo $form['comments']; ?></textarea>
				
			<p class="required_msg">* required fields</p>
				
			<input type="submit" name="submit" id="submit">
			
		</fieldset>
    </form>
	
	<!-----------------		JS Links and Validation Code		-------------->
    <script src="jquery.js"></script>
	<script src="validate.js"></script>
	<script>
		// Starting jQuery.
		$(document).ready(function(){

			// Add US Phone Validation
			jQuery.validator.addMethod('phoneUS', function(phone_number, element) {
			phone_number = phone_number.replace(/\s+/g, ''); 
			return this.optional(element) || phone_number.length > 9 &&
				phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
			}, 'Please enter a valid phone number.');

			// Add validation to form.
			$("#form").validate();
		});
	</script>
</body>
</html>

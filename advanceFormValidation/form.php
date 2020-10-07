<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Advance Validation</title>
</head>

<body>
    <form action="" method="post" id="form">
		<fieldset>
			
			<label for="name">Name: <em>*</em></label>
			<input type="text" name="name" id="name" class="required">
				
			<label for="phone">Phone (000-000-0000): <em>*</em></label>
			<input type="text" name="phone" id="phone" class="required phoneUS">
				
			<label for="fax">Fax (000-000-0000):</label>
			<input type="text" name="fax" id="fax">
				
			<label for="email">Email: <em>*</em></label>
			<input type="text" name="email" id="email" class="required email">
				
			<label for="comments">Comments:</label>
			<textarea name="comments" id="comments"></textarea>
				
			<p class="required_msg">* required fields</p>
				
			<input type="submit" name="submit" id="submit">
			
		</fieldset>
    </form>
    
    <script src="jquery.js"></script>
	<script src="validate.js"></script>
	<script>
	$(document).ready(function(){

		// Add US Phone Validation
		jQuery.validator.addMethod('phoneUS', function(phone_number, element) {
    	phone_number = phone_number.replace(/\s+/g, ''); 
    	return this.optional(element) || phone_number.length > 9 &&
        	phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
		}, 'Please enter a valid phone number.');

		$("#form").validate();
	});
</script>
</body>
</html>

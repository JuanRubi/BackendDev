<?php 
// Creating variables.
$error_open = "<label class='error'>";
$error_close = "</label>";
$valid_form = TRUE;
$redirect = "success.php";

// All form elements.
$form_elements = array('name', 'phone', 'fax', 'email', 'comments');

// Form elements we need to validate.
$required = array('name', 'phone', 'email');

foreach($required as $require)
{
    $error[$require] = '';
}

if(isset($_POST['submit']))
{
    // Process the form, get form data.
    foreach($form_elements as $element)
    {   
        // htmlspecialchars check for strange characters in input.
        $form[$element] = htmlspecialchars($_POST[$element]);
    }

    // Check required form elements.
    if($form['name'] == '')
    {
        $error['name'] = $error_open . "Please fill in all required fields." . $error_close;
        $valid_form = FALSE;
    }

    if($form['phone'] == '')
    {
        $error['phone'] = $error_open . "Please fill in all required fields." . $error_close;
        $valid_form = FALSE;
    }

    if($form['email'] == '')
    {
        $error['email'] = $error_open . "Please fill in all required fields." . $error_close;
        $valid_form = FALSE;
    }

    // Check formatting of phone and email using preg_match().
    if($error['phone'] == '' && !preg_match('/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/', $form['phone']))
    {
        $error['phone'] = $error_open . "Please enter a valid phone number." . $error_close;
        $valid_form = FALSE;
    }

    if($error['email'] == '' && !preg_match('/^\S+@\S+\.\S+$/', $form['email']))
    {
        $error['phone'] = $error_open . "Please enter a valid email." . $error_close;
        $valid_form = FALSE;
    }

    // Check if form is valid
    if($valid_form)
    {
        // Redirect to desired page if login is successful.
        header("Location: . $redirect");
    }
    else
    {
        include('form.php');
    }
}
else
{
    foreach($form_elements as $element)
    {
        $form[$element] = '';
    }

    // Display form if not submitted.
    include('form.php');
}
?>
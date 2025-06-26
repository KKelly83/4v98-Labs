<html lang="en">
<head>
<title>Exercise 15.4 - Error Handlers</title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
<?php
if (isset($_POST['name'])) {
    echo "form posted";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}

function my_error_handler($errno, $errstr, $errfile, $errline) {
    $msg = "<p>Custom Handling [$errno] ";
    $msg .= htmlspecialchars($errstr) . " occurred on line ";
    $msg .= "<strong>" . $errline . "</strong> ";
    $msg .= "in the file: <strong>" . $errfile . "</strong></p>";
    
    // Display custom error only if it's not a notice
    if ($errno !== E_NOTICE) {
        echo $msg;
        die("Sorry, the system is down for maintenance. Please try again soon.");
    }
}

set_error_handler('my_error_handler');

// Catch fatal errors
register_shutdown_function(function () {
    $error = error_get_last();
    if ($error && ($error['type'] & (E_ERROR | E_PARSE | E_CORE_ERROR | E_COMPILE_ERROR))) {
        echo "<p>Custom Fatal Error: {$error['message']} on line {$error['line']} in {$error['file']}</p>";
    }
});

hohhaha; // This line triggers an error
?>

<div class='container'>
<h2>Form to work with</h2>
<form name='mainForm' id='mainForm' method='post'>
  <div class="form-group">
    <legend>Required Information:</legend>
      <label for="name">Name</label>
      <input name="name" id="name" type="text" class="form-control" />
  </div>
  <div class='form-group'>
      <label for="email">Email</label>
      <input name="email" id="email" type="text" class="form-control" />
  </div>
  <div class='form-group'>
      <label for="phone">Phone</label>
      <input name="phone" id="phone" type="text" class="form-control" />
  </div>
  <div class="form-group">
        <legend>Optional Information:</legend>
      <label for="how">How did you hear about us?</label>
      <input name="how" id="how" type="text" size="30" class="form-control" />
  </div>
  <input type="submit" value="Submit Form" class="form-control" />
</form>
</div>
</body>


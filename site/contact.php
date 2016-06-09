

 <!DOCTYPE html>
<html lang="en">
<?php

if (isset($_GET['Message'])) {
    print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
}
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User Form</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="form.js"></script>
           
</head>
<body>


    <!-- Page Content -->
    <div class="container">

    <h1 align="center">Form Page</h1>
  <form name="sentMessage" id="contactForm"  action="check.php" method="post">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>UserName:</label>
                            <input type="text" class="form-control" id="phone" name="username" required data-validation-required-message="Please enter your username.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required data-validation-required-message="Please enter your password.">
                        </div>
                     </div> 
                     <div class="control-group form-group">
                        <div class="controls">
                            <label>Upload Your Picture:</label>
                            <input type="file" class="form-control" id="file" name="file" accept="image/*" required data-validation-required-message="Attach Your Picture">
                        </div>
                     </div>   
                    <div id="success" class="sucess"></div>
                    <!-- For success/fail messages -->
                    <br>
                    <button type="submit" class="btn btn-primary" name="submit">Send Message</button>
                </form>
                <div id="success">
               
            </div>
</body>
</html>

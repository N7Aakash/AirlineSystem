<?php require_once("includes/db.php"); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign up - HTML5 </title>
    <meta name="description" content="Sign Up">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/4F028902-886C-6E45-9607-B57B6364032F/main.js" charset="UTF-8"></script>
</head>

<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <h1>Sign Up</h1>
                </div>
                <div class="login-form">
                    <form method="POST" action="scripts/registration/registration.php" class="login-form">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="user_name">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Email" name="user_email">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="user_password">
                        </div>
                        <div class="form-group">
                            <label>Contact</label>
                            <input type="text" class="form-control" placeholder="contact" name="user_contact">
                        </div>
                        <div class="form-group">
                            <label>Gender </label>
                            <div class="radio">
                                <label><input type="radio" name="user_male">Male</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="user_female">Female</label>
                            </div>


                            <div class="checkbox">
                                <label>
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                            </div>
                            <button type="submit" name="register" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>

                            <div class="register-link m-t-15 text-center">
                                <p>Already have account ? <a href="login.php">Login in</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    
    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>



</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register - NTTU</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/register.css">
    <style>
/* .cancel button:hover{
    background-color: red;
} */
    </style>
</head>

<body>
    <div class="container">
        <h3 class="text-center">Register</h3>
        <div class="row">
            <div class="col-xs-3 col-sm-3 ">
            </div>

            <div class="col-xs-6 col-sm-6 ">
                <form action="register_submit.php" method="post" class="form" role="form">

                    <label for="username"><b> User Name: *</b></label>
                    <input type="text" placeholder="Enter User Name" class="form-control" name="txtusername" required>
                    <br>

                    <!-- <label for="Lname"><b>Last Name: *</b></label>
                    <input type="text" placeholder="Enter Last Name" class="form-control" name="lastname" required>
                    <br> -->

                    <label for="email"><b>E-mail: *</b></label>
                    <input type="text" placeholder="Enter Email" class="form-control" name="txtemail" required>
                    <br>

                    <label for="password"><b>Password: *</b></label>
                    <input type="password" placeholder="Enter Password" class="form-control" name="txtpassword" required>
                    <br>

                    <label for="password"><b>Confirm Password:</b></label>
                    <input type="password" placeholder="Enter Confirm Password" class="form-control" name="repassword"
                        required>
                    <!-- <br> -->

                    <div class="register">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                    </div>
                </form>
                <br>
                <form action="login.php">
                    <div class="cancel">
                        <button class="btn btn-lg btn-primary btn-block" type="submit" >Cancel</button>
                    </div>
                </form>
            </div>

            <div class="col-xs-3 col-sm-3 ">
            </div>
        </div>
    </div>
</body>

</html>

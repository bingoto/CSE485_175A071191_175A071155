<!DOCTYPE html>
<?php
//Khai báo sử dụng session
session_start();
?>
<html lang="en">

<head>
    <title>Login - NTTU</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="icons/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    
</head>

<body>

    <div class="imgcontainer">
        <img src="picture/LOGO.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <!-- <form name="flogin" method="post"
action="thanhcong.php?goto=" onsubmit="return checkinput();"> -->
        <form action="login_submit.php" method="post" class="login">
            <div class="col-xs-6 col-sm-6 ">
                <div id="error" style="color: red;"></div>
                <div id="ok" style="color: green"></div>
                <label for="uname"><b>Email: </b></label>
                <input type="text" placeholder="Enter Email" class="form-control" name="txtemail" id="txtemail"
                    onkeyup="check()" required>
                <div id="z-email"></div>
                <br>
                <label for="psw"><b>Password: </b></label>
                <input type="password" placeholder="Enter Password" class="form-control" name="txtpassword"
                    id="txtpassword" onkeyup="check()" required>
                <div id="z-password"></div>
                <br>
                <label for="chkremember">
                    <input type="checkbox" checked="checked" name="remember">Remember me
                </label>

                <div class="login">
                    <button type="submit" name="btn_login">Login</button>
                </div>

            </div>
        </form>

        <form action="register.php">
            <div class="login col-xs-6 col-sm-6">
                <button type="submit">Register</button>
            </div>
        </form>
        <br>
        <div class="col-xs-6 col-sm-6" style="background-color:#f1f1f1; width: auto;">
            <span class="psw">Forgot&nbsp;<a href="#"> password?</a></span>
        </div>
    </div>
    <!-- <script src="js/jquery.min.js"></script> -->
    <script>
    function check() {

        var data = new Array();
        // data[0] = document.getElementById('name').value;
        data[0] = document.getElementById('txtemail').value;
        data[1] = document.getElementById('txtpassword').value;
        // data[3] = document.getElementById('cpassword').value;

        var error = new Array();
        // myerror[0] = "<span style='color:red,font-weight:bold'>Bạn chưa nhập tên</span>";
        error[0] = "<span style='color:red;font-weight:bold;'>* Bạn chưa nhập email</span>";
        error[1] = "<span style='color:red;font-weight:bold;'>* Bạn chưa nhập mật khẩu</span>";
        // myerror[3] = "<span style='color:red,font-weight:bold'>Mật khẩu chưa khớp</span>";

        var nearby = new Array("z-email", "z-password");

        for (i in data) {
            var z_error =error[i];
            var div = nearby[i];

            if (data[i] == "") {
                document.getElementById(div).innerHTML = z_error;
               
            } else {
                document.getElementById(div).innerHTML = "Hợp lệ";
            }
        }

    }
    </script>

</body>

</html>
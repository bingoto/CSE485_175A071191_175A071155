<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register - NTTU</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/register.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script> -->
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

                <form action="register_submit.php" method="post" class="form">

                    <label for="username"><b> User Name: *</b></label>
                    <input type="text" placeholder="Enter User Name" class="form-control" name="txtusername"
                        id="username">
                    <br>

                    <label for="email"><b>E-mail: *</b></label>
                    <input type="text" placeholder="Enter Email" class="form-control" name="txtemail" id="email">
                    <br>

                    <label for="password"><b>Password: *</b></label>
                    <input type="password" placeholder="Enter Password" class="form-control" name="txtpassword"
                        id="password">
                    <br>

                    <label for="password"><b>Confirm Password:</b></label>
                    <input type="password" placeholder="Enter Confirm Password" class="form-control" name="repassword"
                        id="repassword">
                    <!-- <br> -->

                    <div class="register">
                        <button class="btn btn-lg btn-primary btn-block" type="submit" id="register">Register</button>
                    </div>
                </form>
                <div id="result"></div>
                <script>
                $('#register').click(function() {
                    var username = $('#username').val();
                    var email = $('#email').val();
                    var password = $('#password').val();
                    $.ajax({
                        url: 'register_submit.php',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            username: username,
                            email: email,
                            password: password
                        },
                        // success: function(result) {
                        //     // if(result == 1)
                        //     //     $('#result').append('Email đã tồn tại');
                        //     // if(result == 2)
                        //     //     $('#result').append('Thêm thành công');
                        //     if ($result == 1) {
                        //         alert('Email đã tồn tại')
                        //     }
                        //     if($result == 2){
                        //         alert('Bạn đã đăng ký thành công')
                        //     }
                        // }

                    });
                    alert('Bạn đã đăng ký')
                });
                </script>

                <br>
                <form action="login.php">
                    <div class="cancel">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Cancel</button>
                    </div>
                </form>
            </div>

            <div class="col-xs-3 col-sm-3 ">
            </div>
        </div>
    </div>
    <script>
    // $('form').submit(function() {
    //     // Xóa trắng thẻ div show lỗi
    //     $('#showerror').html('');

    //     var username = $('#username').val();
    //     var email = $('#email').val();
    //     var password = $('#password').val();

    //     // Kiểm tra dữ liệu có null hay không
    //     if ($.trim(username) == '') {
    //         alert('Bạn chưa nhập tên đăng nhập');
    //         return false;
    //     }

    //     if ($.trim(email) == '') {
    //         alert('Bạn chưa nhập email');
    //         return false;
    //     }
    //     if ($.trim(password) == '') {
    //         alert('Bạn chưa nhập email');
    //         return false;
    //     }
    //     // Nếu bạn thích có thể viết thêm hàm kiểm tra định dang email
    //     // ở đây tôi làm chú yêu chỉ cách dùng ajax nên sẽ ko đề cập tới,
    //     // vì sợ bài dài sẽ rối

    //     $.ajax({
    //         url: 'register_submit.php',
    //         type: 'post',
    //         dataType: 'json',
    //         data: {
    //             userName: username,
    //             email: email,
    //             passWord : password

    //         },
    //         success: function(result) {
    //             // Kiểm tra xem thông tin gửi lên có bị lỗi hay không
    //             // Đây là kết quả trả về từ file do_validate.php
    //             if (!result.hasOwnProperty('error') || result['error'] != 'success') {
    //                 alert('Có vẻ như bạn đang hack website của tôi');
    //                 return false;
    //             }

    //             var html = '';

    //             // Lấy thông tin lỗi username
    //             if ($.trim(result.username) != '') {
    //                 html += result.username + '<br/>';
    //             }

    //             // Lấy thông tin lỗi email
    //             if ($.trim(result.email) != '') {
    //                 html += result.email;
    //             }

    //             // Cuối cùng kiểm tra xem có lỗi không
    //             // Nếu có thì xuất hiện lỗi
    //             if (html != '') {
    //                 $('#showerror').append(html);
    //             } else {
    //                 // Thành công
    //                 $('#showerror').append('Thêm thành công');
    //             }
    //         }
    //     });

    //     return false;
    // });
    </script>
</body>

</html>
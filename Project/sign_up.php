<?php
// if the sign up form was submitted(Nếu mẫu đăng ký đã được gửi)
if($_POST){
 
    $email = isset($_POST['email']) ? $_POST['email'] : "";
 
    // posted email must not be empty(Email không được để trống)
    if(empty($email)){
        echo "<div>Email cannot be empty.</div>";
    }
 
    // must be a valid email address(Phải là 1 địa chỉ mail hợp lệ)
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<div>Your email address is not valid.</div>";
    }
 
    else{
       //include database connection(Kết nối cơ sở dữ liệu)
       $conn = mysqli_connect('localhost','root','','nguyentatthanh');
 
        // check first if record exists(Kiểm tra bản ghi có tồn tại)
        $query = "SELECT userId FROM users WHERE email = ? and verified = '1'";
        $stmt = $conn->prepare( $query );
        $stmt->bindParam(1, $email);
        $stmt->execute();
        $num = $stmt->rowCount();
 
        if($num>0){
            echo "<div>Email của bạn đã được kích hoạt</div>";
        }
 
        else{
 
            // check first if there's unverified email related(Kiểm tra trước nếu có email chưa xác minh liên quan)
            $query = "SELECT userId FROM users WHERE email = ? and verified = '0'";
            $stmt = $conn->prepare( $query );
            $stmt->bindParam(1, $email);
            $stmt->execute();
            $num = $stmt->rowCount();
 
            if($num>0){
 
                // you have to create a resend verification script(Bạn phải tạo tập lệnh xác minh gửi lại)
                echo "<div>Email của bạn đã có trong hệ thống nhưng chưa được xác minh. <a href='resend.php'>Resend verification?</a>.</div>";
            }
 
            else{
 
                // now, compose the content of the verification email, it will be sent to the email provided during sign up
                //(bây giờ, soạn nội dung của email xác minh, nó sẽ được gửi đến email được cung cấp trong quá trình đăng ký)

                // generate verification code, acts as the "key"(tạo mã xác minh, đóng vai trò là "khóa")
                $verificationCode = md5(uniqid("yourrandomstringyouwanttoaddhere", true));
 
                // send the email verification(gửi xác minh email)
                $verificationLink = "http://example.com/activate.php?code=" . $verificationCode;
 
                $htmlStr = "";
                $htmlStr .= "Hi " . $email . ",<br /><br />";
 
                $htmlStr .= "Vui lòng nhấp vào nút bên dưới để xác minh đăng ký của bạn và có quyền truy cập vào trung tâm tải xuống.<br /><br /><br />";
                $htmlStr .= "<a href='{$verificationLink}' target='_blank' style='padding:1em; font-weight:bold; background-color:blue; color:#fff;'>VERIFY EMAIL</a><br /><br /><br />";
 
                $htmlStr .= "Kind regards,<br />";
                $htmlStr .= "<a href='https://www.hoangweb.com/' target='_blank'>Dịch vụ thiết kế web giá rẻ</a><br />";
 
 
                $name = "Hoangweb.com";
                $email_sender = "no-reply@hoangweb.com";
                $subject = "Verification Link | Thiết kế web giá rẻ | Subscription";
                $recipient_email = $email;
 
                $headers  = "MIME-Version: 1.0rn";
                $headers .= "Content-type: text/html; charset=iso-8859-1rn";
                $headers .= "From: {$name} <{$email_sender}> n";
 
                $body = $htmlStr;
 
                // send email using the mail function, you can also use php mailer library if you want
                //(gửi email bằng chức năng thư, bạn cũng có thể sử dụng thư viện thư php nếu muốn)
                if( mail($recipient_email, $subject, $body, $headers) ){
 
                    // tell the user a verification email were sent(báo cho người dùng một email xác minh đã được gửi)
                    echo "<div id='successMessage'>Một email xác minh đã được gửi tới<b>" . $email . "</b>, Vui lòng mở hộp thư đến email của bạn và nhấp vào liên kết đã cho để bạn có thể đăng nhập.</div>";
 
 
                    // save the email in the database(lưu email trong cơ sở dữ liệu)
                    $created = date('Y-m-d H:i:s');
 
                    //write query, verified = '0' means it is unverified, on activation, it becomes '1'
                    //(viết truy vấn, xác minh = '0' có nghĩa là nó chưa được xác minh, khi kích hoạt, nó trở thành '1')
                    $query = "INSERT INTO 
                                users 
                            SET 
                                email = ?, 
                                verification_code = ?, 
                                created = ?,
                                verified = '0'";
 
                    $stmt = $con->prepare($query);
 
                    $stmt->bindParam(1, $email);
                    $stmt->bindParam(2, $verificationCode);
                    $stmt->bindParam(3, $created);
 
                    // Execute the query(Thực hiện truy vấn)
                    if($stmt->execute()){
                        // echo "<div>Unverified email was saved to the database.(Email chưa được xác minh đã được lưu vào cơ sở dữ liệu.)</div>";
                    }else{
                        echo "<div>Không thể lưu email của bạn vào cơ sở dữ liệu. <a href='https://www.hoangweb.com/lien-he'>Contact Us.</a></div>";
                        //print_r($stmt->errorInfo());
                    }
 
                }else{
                    die("Gửi thất bại.");
                }
            }
 
 
        }
 
    }
 
}
 
// show your sign up or registration form(hiển thị đăng ký hoặc mẫu đăng ký của bạn)
echo "<form action='" . $_SERVER[PHP_SELF] . "' method='post'>";
    echo "<input type='email' name='email' placeholder='Enter your email address to subscribe' required />";
    echo "<input type='submit' value='Subscribe' />";
echo "</form>";
?>
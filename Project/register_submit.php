<?php
 
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['txtusername'])){
        die('');
    }
     
    //kết nối với database
    $conn = mysqli_connect('localhost','root','','nguyentatthanh');
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.php
    $username   = addslashes($_POST['txtusername']);
    $password   = addslashes($_POST['txtpassword']);
    $email      = addslashes($_POST['txtemail']);
    $repassword = addslashes($_POST['repassword']);
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if ($username =='' || $password=='' || $email=='' )
    {
        echo "Vui lòng nhập đầy đủ thông tin.";
        header("Location: register.php ");
        exit;
    }
    if($password != $repassword){
        header("Location: register.php ");
    }
        // Mã khóa mật khẩu
        $password = md5($password);
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
//   // 	B3 : Thực hiện truy vấn theo ý muốn

      $sqlusername = " SELECT userName FROM users where userName='$username' ";
      mysqli_set_charset($conn,'UTF8');
      $result1 = mysqli_query($conn,$sqlusername);
    if (mysqli_num_rows($result1) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='register.php'>Trở lại</a>";
        exit;
    }
          
    //Kiểm tra email có đúng định dạng hay không
    // if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
    // {
    //     echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     exit;
    // }
          
    //Kiểm tra email đã có người dùng chưa
    $sqlemail = "SELECT email FROM users WHERE email='$email'";
    mysqli_set_charset($conn,'UTF8');
    $result2 = mysqli_query($conn,$sqlemail);
    if (mysqli_num_rows($result2) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác.<a href='register.php'>Trở lại</a> ";
        exit;
    }
          
    //Lưu thông tin thành viên vào bảng
   
    $adduser = "INSERT INTO users (username,password,email)
            VALUE ('$username','$password','$email')";
                          
    //Thông báo quá trình lưu
    if ($conn->query($adduser) == TRUE)
        echo "Quá trình đăng ký thành công. <a href='login.php'>Trở về</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='register.php'>Thử lại</a>";
?>


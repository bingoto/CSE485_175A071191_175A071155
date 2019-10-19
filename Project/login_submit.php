<!-- Login -->
<?php
//Xử lý đăng nhập
//  //Kết nối tới database
//     $conn = mysqli_connect('localhost','root','','nguyentatthanh');
//     //Khai báo utf-8 để hiển thị được tiếng việt
//     mysqli_set_charset($conn,'UTF8');
//     if(isset($_POST["btn_login"]) && $_POST["txtemail"] !='' && $_POST["txtpassword"] !=''){
//         $email = $_POST["txtemail"];
//         $password =$_POST["txtpassword"];
//         $password = md5($password);
//         $sql = "SELECT * FROM users WHERE email ='$email' AND passWord = '$password'";
//         $result = mysqli_query($conn, $sql);
//         if(mysqli_num_rows($result) >0){
//             echo  " Bạn đã đăng nhập thành công. <a href='index.php'>Vào trang chủ</a>";
//         }else{
//             echo "Đăng nhập không thành công. Vui lòng kiểm tra lại. <a href='login.php'>Trở lại</a>";
//         }
//     } else{
//         header("Location: login.php");
//     }

    if(isset($_POST["btn_login"]) && $_POST["txtemail"] !='' && $_POST["txtpassword"] !='')
    {
        //Kết nối tới database
        $conn = mysqli_connect('localhost','root','','nguyentatthanh');
        //Khai báo utf-8 để hiển thị được tiếng việt
        mysqli_set_charset($conn,'UTF8');
        
        //Lấy dữ liệu nhập vào
        $email  = $_POST['txtemail'];
        $password  = $_POST['txtpassword'];
        // mã hóa pasword
        $password = md5($password);

        //Kiểm tra tên đăng nhập có tồn tại không
        $sqluser = "SELECT * FROM users WHERE email ='$email' AND passWord = '$password'";
        $result = mysqli_query($conn,$sqluser);
        // $nr_user = mysqli_num_rows($query);
        
        if (mysqli_num_rows($result) >0 ) {
            echo  " Bạn đã đăng nhập thành công. <a href='index.php'>Vào trang chủ</a>";
            // header("Location: register.php ");
        }else{
            // $row = mysqli_fetch_assoc($query);
            echo "Đăng nhập không thành công. Vui lòng kiểm tra lại tài khoản và mật khẩu. <a href='login.php'>Trở lại</a>";
        }
    
    }else{
        header("Location: login.php");
    }
    //     //Lưu tên đăng nhập
    //     $_SESSION['userName'] = $username;
    //     echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='index.php'>Về trang chủ</a>";
    //     die();
    // }
     
   

?>

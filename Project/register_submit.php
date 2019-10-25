<?php
 
//     // Nếu không phải là sự kiện đăng ký thì không xử lý
//     if (!isset($_POST['txtusername'])){
//         die('');
//     }
//     else {
     
//     //kết nối với database
//     $conn = mysqli_connect('localhost','root','','nguyentatthanh');
          
//     //Khai báo utf-8 để hiển thị được tiếng việt
//     header('Content-Type: text/html; charset=UTF-8');
          
//     //Lấy dữ liệu từ file dangky.php
//     $username   = addslashes($_POST['txtusername']);
//     $password   = addslashes($_POST['txtpassword']);
//     $email      = addslashes($_POST['txtemail']);
//     $repassword = addslashes($_POST['repassword']);
          
//     //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
//     if ($username =='' || $password=='' || $email=='' )
//     {
//         echo "Vui lòng nhập đầy đủ thông tin.";
//         header("Location: register.php ");
//         exit;
//     }
//     if($password != $repassword){
//         header("Location: register.php ");
//     }
//         // Mã khóa mật khẩu
//         $password = md5($password);
          
//     //Kiểm tra tên đăng nhập này đã có người dùng chưa
// //   // 	B3 : Thực hiện truy vấn theo ý muốn

//       $sqlusername = " SELECT userName, email FROM users where userName='$username' ";
//       mysqli_set_charset($conn,'UTF8');
//       $result1 = mysqli_query($conn,$sqlusername);
//     if (mysqli_num_rows($result1) > 0){
//         echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='register.php'>Trở lại</a>";
//         exit;
//     }
          
//     //Kiểm tra email có đúng định dạng hay không
//     $zemail = "/^[A-Za-z0-9_\.]{5,32}@([a-zA-Z0-9]{2,12})(\.[a-zA-Z]{2,12})+$/";
//     if (!preg_match($zemail, $email))
//     {
//         die("Email này không hợp lệ. Vui long nhập email khác.");
//         // echo "Email này không hợp lệ. Vui long nhập email khác. <a href='register.php'>Trở lại</a>";
//         exit;
//     }
//     // $partten = "/^[A-Za-z0-9_\.]{6,32}@([a-zA-Z0-9]{2,12})(\.[a-zA-Z]{2,12})+$/";
//     // $subject = "phancuong.qt@gmail.com";
//     // if(!preg_match($partten ,$subject, $matchs)){
//     //    echo  "Mail bạn vừa nhập không đúng định dạng ";
//     // }
//     //Kiểm tra email đã có người dùng chưa
//     $sqlemail = "SELECT email FROM users WHERE email='$email'";
//     mysqli_set_charset($conn,'UTF8');
//     $result2 = mysqli_query($conn,$sqlemail);
//     if (mysqli_num_rows($result2) > 0)
//     {
//         echo "Email này đã có người dùng. Vui lòng chọn Email khác.<a href='register.php'>Trở lại</a> ";
//         exit;
//     }else{
//          //Lưu thông tin thành viên vào bảng
   
//     $adduser = "INSERT INTO users (userName,passWord,email)
//     VALUE ('$username','$password','$email')";
//     echo "Quá trình đăng ký thành công. <a href='login.php'>Trở về</a>";
//     }
          
   
                          
    //Thông báo quá trình lưu
    // if ($conn->query($adduser) == TRUE)
    //     echo "Quá trình đăng ký thành công. <a href='login.php'>Trở về</a>";
    // else
    //     echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='register.php'>Thử lại</a>";
//}


 
 
// Khai báo biến lưu lỗi
// $error = array(
//     'error' => 'success',
//     'username' => '',
//     'email' => '',
//     'password' => ''
// );
 
// Kiểm tra tên đăng nhập
// if ($username)
// {
//     $query = mysqli_query($conn, "SELECT count(*) as count FROM users WHERE userName =".$username);
 
//     if ($query){
//         $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
//         if ((int)$row['count'] > 0){
//             $error['username'] = 'Tên đăng nhập đã tồn tại';
//         }
//     }
//     else{
//         die ('');
//     }
// }
 
// Kiểm tra tên email
// if ($email)
// {
//     $query = mysqli_query($conn, "SELECT count(*) as count FROM users WHERE email =".$email);
 
//     if ($query){
//         $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
//         if ((int)$row['count'] > 0){
//             $error['email'] = 'Email đã tồn tại';
//         }
//     }
//     else{
//         die ('');
//     }
// }
 
 // Lấy thông tin username và email
$username = isset($_POST['txtusername']) ? $_POST['txtusername'] : "";
$email = isset($_POST['txtemail']) ? $_POST['txtemail'] : "";
$password = isset($_POST['txtpassword']) ? $_POST['txtpassword'] : "";
$repassword = isset($_POST['repassword']) ? $_POST['repassword'] : "";
// Mã khóa mật khẩu
$password = md5($password);
 
// Nếu cả hai thông tin username và email đều không có thì dừng, thông báo lỗi
if (!$username && !$email){
    die ('Bạn chưa nhập thông tin');
}
 
// Kết nối database
// $conn = mysqli_connect('localhost','id11184867_root','12345','id11184867_nguyentatthanh'); 000webhost
$conn = mysqli_connect('localhost', 'root','', 'nguyentatthanh') or die ('Không kết nối đến database');
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

$data = mysqli_query($conn, "SELECT * FROM users WHERE email ='$email'");
$result = mysqli_num_rows($data);
// $query = mysqli_query($conn, "insert into users (userName, email, passWord) value ('$username','$email','$password')");
if ($result > 0){
    echo "Email đã tồn tại. <a href='register.php' >Thử lại</a>";
    // echo 1;
}else{
    // Tiến hành lưu vào CSDL nếu không có lỗi
   $adduser= mysqli_query($conn, "INSERT INTO users (userName, email, passWord) 
   VALUE ('$username','$email','$password')");
    echo "Đăng ký thành công. <a href='home.php' >Đăng nhập ngay</a>";
    // echo 2;
}
     
 
// Trả kết quả 
// $json = '[
//     {
//        "error": "Email đã tồn tại",
       
//     }
//     {
//         "success" : "Đăng ký thành công";
//     }
// ]';
// echo $json;
?>
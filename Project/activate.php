<?php
//database connection
$conn = mysqli_connect('localhost','root','','nguyentatthanh');
// check first if record exists
$query = "SELECT id FROM users WHERE verification_code = ? and verified = '0'";
$stmt = $conn->prepare( $query );
$stmt->bindParam(1, $_GET['code']);
$stmt->execute();
$num = $stmt->rowCount();
 
if($num>0){
 
    // update the 'verified' field, from 0 to 1 (unverified to verified)
    $query = "UPDATE users 
                set verified = '1'
                where verification_code = :verification_code";
 
    $stmt = $con->prepare($query);
    $stmt->bindParam(':verification_code', $_GET['code']);
 
    if($stmt->execute()){           
        // tell the user
        echo "<div>Email của bạn hợp lệ, cảm ơn!. Bây giờ bạn có thể đăng nhập.</div>";
    }else{
        echo "<div>Không thể cập nhật mã xác minh.</div>";
        //print_r($stmt->errorInfo());
    }       
 
}else{
    // tell the user he should not be in this page
    echo "<div>Tôi nghĩ bạn đang ở sai vị trí.</div>";
}
?>
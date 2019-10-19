<?php
$user = $_POST['email'];
$pass = $_POST['password'];
// B1: Kết nối database
$conn = mysqli_connect('localhost','root','','nguyentatthanh');
// B2: Kiểm tra lỗi
if(!$conn){
    // die('co loi xay ra'.mysqli_connect_error() );
    die('Error......'.mysqli_connect_error());
}
else{
    // 	B3 : Thực hiện truy vấn theo ý muốn
    $sql = " SELECT * FROM users where '$user' = email and '$pass' = password ";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    //	==B4 : Xử lý kết quả trả về
    if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            if($row['userLevel']=='0'){                      
                header("location:login.php");
                }         
        }
        }
}
//B5 : Đóng kết nối
mysqli_close($conn);
?>
	<!-- //==B1 : Ket noi darabase server
	$conn = mysqli_connect('localhost','root','','books');
	//return true / false

	//==B2 : Kiem tra loi (neu co)
	if(!$conn){
		die('Error......'.mysqli_connect_error());
	}else{
	// 	B3 : thuc hien truy van theo y muon
		$sql = "SELECT * FROM books";
		$result = mysqli_query($conn, $sql);

	//	==B4 : Xu ly ket qua tra ve
		if(mysqli_num_rows($result) > 0){
			echo mysqli_num_rows($result)." Ban ghi trong ket qua tra ve";
			echo "<br>";
			while($row = mysqli_fetch_assoc($result)){
				echo "$row[MaS].'--'.$row[TenS]";
				echo "<br>";
			}
		}	
	}
	//B5 : Dong ket noi
	mysqli_close($conn); -->
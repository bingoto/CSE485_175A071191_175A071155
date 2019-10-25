<?php
 //Kết nối tới database
 $conn = mysqli_connect('localhost','root','','nguyentatthanh');
 //Khai báo utf-8 để hiển thị được tiếng việt
 mysqli_set_charset($conn,'UTF8');
$msg='';
if(!empty($_GET['code']) && isset($_GET['code']))
{
   $code=mysql_real_escape_string($_GET['code']);
   $c=mysqli_query($connection,"SELECT uid FROM users WHERE activation='$code'");
 
   if(mysqli_num_rows($c) > 0)
   {
      $count=mysqli_query($connection,"SELECT uid FROM users WHERE activation='$code' and status='0'");
      if(mysqli_num_rows($count) == 1)
      {
         mysqli_query($connection,"UPDATE users SET status='1' WHERE activation='$code'");
         $msg="Your account is activated";
      }
      else
      {
         $msg ="Your account is already active, no need to activate again";
      }
   }
   else
   {
      $msg ="Wrong activation code.";
   }
}
?>
//HTML Part
<?php echo $msg; ?>
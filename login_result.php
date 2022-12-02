<?php
$uid = $_POST['id'];
$upass = $_POST['pass'];

include("conn_db.php");
$sql = "select * from olive_join where id='$uid' && pass='$upass';";
$sel = mysqli_query($conn, $sql);
$n = mysqli_num_rows($sel); 
if($uid == null) echo "<script>alert('아이디를 입력하세요.'); history.go(-1);</script>"; 
else if($upass == null) echo "<script>alert('비밀번호를 입력하세요.'); history.go(-1);</script>"; 
else if($n ==0) echo "<script>alert('아이디나 비밀번호를 틀렸습니다.'); history.go(-1);</script>"; 
else{
    setcookie("uid",$uid,time()+3600*24);
    setcookie("upass",$upass,time()+3600*24);
    echo "<meta http-equiv='refresh' content='2;url=index.php'>";
}
mysqli_close($conn);
?>
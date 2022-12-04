<?php
include("./conn_db.php");
$brand = $_POST['brand'];
$name = $_POST['name'];
$price = $_POST['price'];
$sale = $_POST['sale'];
if(isset($_POST['s_icon'])){
    $s_icon = $_POST['s_icon'];
}else{
    $s_icon ="false";
}
if(isset($_POST['t_icon'])){
    $t_icon = $_POST['t_icon'];
}else{
    $t_icon ="false";
}
if(isset($_POST['p_icon'])){
    $p_icon = $_POST['p_icon'];
}else{
    $p_icon ="false";
}
if(isset($_POST['c_icon'])){
    $c_icon = $_POST['c_icon'];
}else{
    $c_icon ="false";
}
$headImg = $_FILES['headImg']['name'];
$headImg_tmp = $_FILES['headImg']['tmp_name']; 
$dImg = $_FILES['dImg']['name']; 
$dImg_tmp = $_FILES['dImg']['tmp_name']; 

$upload_dir ='./upload';

if(!is_dir($upload_dir)){ // upload dir이 없으면
    mkdir($upload_dir);  // 만들어준다 //mkdir() 함수
}

move_uploaded_file($headImg_tmp, "$upload_dir/$headImg");
move_uploaded_file($dImg_tmp, "$upload_dir/$dImg");

$sql = "insert into goods(brand, name, price, sale, s_icon, t_icon, p_icon, c_icon, review, head_img) values('$brand','$name',$price, $sale, $s_icon,$t_icon, $p_icon, $c_icon,0.0,'$upload_dir/$headImg');";
mysqli_query($conn, $sql);
mysqli_close($conn);
echo "<meta http-equiv='refresh' content='3;url=Myindex.html'>";
?>
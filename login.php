<?php
$con=mysqli_connect("localhost", "root", "root", "test");

mysqli_set_charset($con,"utf8");


if (mysqli_connect_errno($con)){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_POST['Id'];
$pw = $_POST['Pw'];



  $sql = "SELECT * FROM user WHERE u_mail = '".$id."' AND u_passwd='".$pw."'";

  $re = mysqli_query($con, $sql);

  $num = $re->num_rows;

  if($num>0){
    echo 'success';
  } else {
    echo ' 로그인에 실패했습니다.';
  }

    mysqli_close($con);
?>

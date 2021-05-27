<?php
$con=mysqli_connect("localhost", "root", "root", "test");

mysqli_set_charset($con,"utf8");


if (mysqli_connect_errno($con)){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$name = $_POST['name'];
$email = $_POST['email'];
$pw =$_POST['pw'];


  $sql2 = "SELECT * FROM user WHERE u_mail = '".$email."'";
  $re2 = mysqli_query($con, $sql2);

  $num = $re2->num_rows;

  if($num>0){
    echo '이미 가입한 이메일 입니다.';
  } else{
    
    $sql = "insert into user (u_name, u_mail, u_passwd) values ('$name','$email', '$pw')";
    $re = mysqli_query($con, $sql);

    if($re) {
      echo 'success';
    } else{
      echo 'fail';
    }
  }

  mysqli_close($con);
?>

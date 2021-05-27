<?php
$con=mysqli_connect("localhost", "root", "root", "test");

mysqli_set_charset($con,"utf8");


if (mysqli_connect_errno($con)){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$temp = $_GET['temp'];
$humi = $_GET['humi'];
$dust = $_GET['dust'];

echo "<br/>Temperature = $temp";
echo ",";
echo "Humidity = $humi";
echo ",";
echo "Dust = $dust<br>";

$query = "INSERT INTO test2 (temp, humi, dust) VALUES ('$temp', '$humi', '$dust')";
$re = mysqli_query($con, $query);


if($re) {
  echo"</br>sucsess!!";
} else{
  echo 'fail';
}
  mysqli_close($con);
?>

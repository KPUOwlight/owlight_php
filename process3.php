<?php
$con=mysqli_connect("localhost", "id", "pw", "db");

mysqli_set_charset($con,"utf8");


if (mysqli_connect_errno($con)){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$temp = $_GET['temp'];
$humi = $_GET['humi'];
$dust = $_GET['dust'];
$battery = $_GET['bat'];

/*echo "<br/>Temperature = $temp";
echo ",";
echo "Humidity = $humi";
echo ",";
echo "Dust = $dust";
echo ","
echo "Battery = $battery<br>"*/

$query = "INSERT INTO test3 (temp, humi, dust, battery) VALUES ('$temp', '$humi', '$dust', '$battery')";
$re = mysqli_query($con, $query);


if($re) {
  echo"</br>sucsess!!";
} else{
  echo 'fail';
}
  mysqli_close($con);
?>

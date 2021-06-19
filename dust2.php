<?php
header('Content-Type: application/json; charset=utf8');
$link=mysqli_connect("localhost", "root", "root", "test");
if (!$link)
{
    echo "MySQL 접속 에러 : ";
    echo mysqli_connect_error();
    exit();
}

mysqli_set_charset($link,"utf8");

$eamil = $_POST['email'];


$sql="SELECT * FROM test3 ORDER BY time DESC LIMIT 1;";

$result=mysqli_query($link,$sql);
$data = array();
if($result){

    while($row=mysqli_fetch_array($result)){
        array_push($data,
            array('temp'=>$row[0],
            'humi'=>$row[1],
            'dust'=>$row[2],
            'battery'=>$row[3],
            'time'=>$row[4]
        ));
    }

    $json = json_encode(array("result"=>$data), JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
    echo $json;

}
else{
    echo "SQL문 처리중 에러 발생 : ";
    echo mysqli_error($link);
}



mysqli_close($link);

?>
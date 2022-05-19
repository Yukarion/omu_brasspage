<?php
/* json版 わけわからん
$raw = file_get_contents('php://input'); // POSTされた生のデータを受け取る
$data = json_decode($raw);
//ユーザID
$userID = 'hogehoge';
//ユーザパスワード
$password = 'hogehoge';

/* form-data版 もっとわからん
 */
$data = $_POST;
//ユーザID
$userID = "hogehoge";
//ユーザパスワード
$password = "hogehoge";

if($userID == $data["userID"]){
  $userID_correct = true;
}else{
  $userID_correct = false;
}
if($password == $data["password"]){
  $password_correct = true;
}else{
  $password_correct = false;
}

$response = array("userID" => $userID_correct , "password" => $password_correct);

//json出力
$json = json_encode($response);
// header('Access-Control-Allow-Origin: https://omu-wind.com');

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo $json;
?>

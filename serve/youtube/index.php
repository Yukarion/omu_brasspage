<?php
//Google APIキー
$apikey = 'AIzaSyADlM2uDjO7Lm0Nq9brtdhzEeGtoG1vNko';
//Youtube プレイストID
$playlistid = 'UUvrAz5r2EVMbWNOEDoH0k8A';
//取得件数
$maxresults = '1';
//API URL
$url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults='.$maxresults .'&playlistId='.$playlistid.'&key='.$apikey;
//ローカルjsonファイル名
$filename = 'youtube.json';

//データ更新
function update($filename,$url){
	$json = @file_get_contents($filename);
	$handle = fopen($filename, 'w');
	if(flock($handle, LOCK_EX)){
		if($data = @file_get_contents($url)){
			$json = $data;
		}
		fwrite($handle, $json);
	}
	fclose($handle);
}

//ローカルjson更新時間チェック
if(file_exists($filename)){
	$updatetime = filemtime($filename);
	$diff = time() - $updatetime;
	if($diff >= 600) {
		update($filename,$url);
	}
}else{
	update($filename,$url);
}

//ローカルjson出力
$json = @file_get_contents($filename);
header('Access-Control-Allow-Origin: http://localhost:8080');
// header('Access-Control-Allow-Origin: https://omu-brass.com');
header('Content-Type: application/json');
echo $json;
?>

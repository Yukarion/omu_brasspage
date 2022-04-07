<?php

class config {
/**
 * アプリID
 */
  const GRAPH_API_APP_ID = '389629916057570';

/**
 * シークレット
 */
  const GRAPH_API_APP_SERET = '101baaaa248178e842211aa515937cd2';

/**
 * アプリアクセストークンのファイル
 */
  const APP_FILENAME = '/app_token';

/**
 *  インスタグラムビジネスアカウントIDとインスタグラムアクセストークンのファイル
 */
  const INSTA_FILENAME = '/insta_token';

/**
 * アプリアクセストークンのファイル
 */
  const PAGENAME = '大阪公立大学 吹奏楽部';

}


function update($user_token,$curl_options){
  echo '<h2>１．APPIDとAPPシークレットとユーザーアクセストークンを使用して新しいアプリアクセストークンを取得(アプリアクセストークンはユーザアクセストークンとしても使える)</h2>'."\n";
  $url = [];
  $url[] = 'https://graph.facebook.com/v11.0/oauth/access_token';
  $params = [];
  $params[] = 'grant_type=fb_exchange_token';
  $params[] = 'client_id='.config::GRAPH_API_APP_ID;
  $params[] = 'client_secret='.config::GRAPH_API_APP_SERET;
  $params[] = 'fb_exchange_token='.$user_token;
  $url[] = '?'.implode('&', $params);
  $url = implode('', $url);
  $ch = curl_init($url);
  curl_setopt_array($ch, $curl_options);
  $res = curl_exec($ch);
  $res = json_decode($res);
  echo('<div>'.nl2br(str_replace(" ", "&nbsp;", htmlspecialchars('('.__LINE__.')'."\n".'$res => '.print_r($res, true)))).'</div>');

  // アプリアクセストークンを更新する
  file_put_contents(dirname(__FILE__).config::APP_FILENAME, $res->access_token);
  $user_token = $res->access_token;

  echo '<h2>２．アプリアクセストークンを使用してフェイスブックIDを取得</h2>'."\n";
  $url = 'https://graph.facebook.com/v11.0/me?access_token='.$user_token;
  $ch = curl_init($url);
  curl_setopt_array($ch, $curl_options);
  $res = curl_exec($ch);
  $res = json_decode($res);
  // echo('<div>'.nl2br(str_replace(" ", "&nbsp;", htmlspecialchars('('.__LINE__.')'."\n".'$res => '.print_r($res, true)))).'</div>');

  $facebook_id = $res->id;

  echo '<h2>３．アプリアクセストークンとフェスブックIDを使用してFacebookページ一覧とページアクセストークンの取得</h2>'."\n";
  $url = 'https://graph.facebook.com/v11.0/'.$facebook_id.'/accounts?fields=id,name,access_token&access_token='.$user_token;
  $ch = curl_init($url);
  curl_setopt_array($ch, $curl_options);
  $res = curl_exec($ch);
  $res = json_decode($res);
  // echo('<div>'.nl2br(str_replace(" ", "&nbsp;", htmlspecialchars('('.__LINE__.')'."\n".'$res => '.print_r($res, true))))."</div> \n");

  echo '<h2>４．フェイスブックの各ページ毎に処理を行う</h2>'."\n";

  foreach ($res->data as $page) {
    if($page->name == config::PAGENAME){

      echo '<h3>４－１．ユーザートークンとページアクセスIDを使用してページにリンクしたインスタグラムビジネスアカウントIDとインスタグラムアクセストークンを取得</h3>'."\n";
      $url = 'https://graph.facebook.com/v11.0/'.$page->id.'/?fields=access_token,instagram_business_account&access_token='.$user_token;
      $ch = curl_init($url);
      curl_setopt_array($ch, $curl_options);
      $res = curl_exec($ch);
      file_put_contents(dirname(__FILE__).config::INSTA_FILENAME, $res);
    }
  }
}


/**
 * ユーザートークン
 */
$user_token = 'EAAFiXci9jZBIBAKqZBeI1YWqttENBxQ9S0GcP3kfCZBJgjX2kB9YgrtWs3wBVy4pzJ1fZCMXA9ZCrcxaeSTtQ53Hu0LYw5RwKlq2TyE6Oak12imIkRw7fZCYaDCoIDAuKMmMZAdph0rEHiCWp84yT3t9pvgZBd2lXhE0d2xy4d6GS08IlyHimMyLxTBTXfZAZCgRVuJvXRRrO7WJT8Pc9mjahh1rCiFPy2publmyGx8vLB3BImMEbCYsp4';


// 前回取得したユーザートークンを取得
if (is_file(dirname(__FILE__).config::APP_FILENAME)) {
  $user_token = file_get_contents(dirname(__FILE__).config::APP_FILENAME);
  echo($user_token."\n");
}


$curl_options = [
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 3,
];


//ローカルjson更新時間チェック
if(file_exists(config::APP_FILENAME)){
  echo "ファイルあるね"."\n";
	$updatetime = filemtime(config::APP_FILENAME);
	$diff = time() - $updatetime;
	if($diff >= 2592000) {
    echo "どっち？"."\n";
		update($user_token,$curl_options);
	}
}else{
	update($user_token,$curl_options);
}

$res = file_get_contents(dirname(__FILE__).config::INSTA_FILENAME);

$res = json_decode($res);

// echo('<div>'.nl2br(str_replace(" ", "&nbsp;", htmlspecialchars('('.__LINE__.')'."\n".'$res => '.print_r($res, true))))."</div> \n");

$instagram_business_account_id = $res->instagram_business_account->id;
$instagram_access_token = $res->access_token;


echo '<h3>４－２．インスタグラムビジネスアカウントIDとインスタグラムアクセストークンを使用してインスタグラムの投稿データを取得</h3>'."\n";
$params = [];
$params[] = 'access_token='.$instagram_access_token;
$params[] = 'fields=name,media.limit(6){caption,media_url,thumbnail_url,permalink,media_type}';
$url = 'https://graph.facebook.com/v11.0/'.$instagram_business_account_id.'/?'.implode('&', $params);
$ch = curl_init($url);
curl_setopt_array($ch, $curl_options);
$res = curl_exec($ch);
$res = json_decode($res);
// echo('<div>'.nl2br(str_replace(" ", "&nbsp;", htmlspecialchars('('.__LINE__.')'."\n".'$res => '.print_r($res, true)))).'</div>');

echo '<h3>４－３．インスタグラムの投稿データを表示</h3>'."\n";
foreach ($res->media->data as $post) {

  echo "<h4>CAPTION: {$post->caption}</h4>";
  echo "<a href=\"{$post->permalink}\">";
  echo "<img src=\"{$post->media_url}\" alt=\"{$post->caption}\" style=\"max-height:100px;max-width:100px;\"/>";
  echo "</a>";
}

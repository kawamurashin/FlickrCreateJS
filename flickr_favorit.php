<?php
  

$limit = 10;

$api_key = '**********************************';

$user_id = '************';

$url = 'http://api.flickr.com/services/rest/?method=flickr.favorites.getPublicList&user_id='.$user_id.'&api_key='.$api_key.'&tags=sky&per_page='.$limit;

$data = file_get_contents($url)
or die("XMLパースエラー");

echo $data;
?>

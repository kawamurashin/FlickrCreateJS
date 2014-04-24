<?php
  

$keyword = $_POST['key'];

$limit = 10;

$api_key = '**********************************';

$method   = 'flickr.photos.search';

$text = urlencode($keyword);

$sort = "interestingness-desc";

$url = 'http://api.flickr.com/services/rest/?'.
 'method='.$method.
 '&api_key='.$api_key.
 '&text='.$text.
 '&sort='.$sort.
 '&per_page='.$limit;

$data = file_get_contents($url)
or die("XMLパースエラー");

echo $data;


?>

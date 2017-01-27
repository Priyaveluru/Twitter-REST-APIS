<html>
<body>
<h1>Latest Trends</h1>
<form>
<div id="App1"><input type="button" name="app1" value="Back" onclick="window.location.href='http://localhost:8082/Project/API.html'"></div>
</form>
</body>
</html>

<?php
require_once('TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token' => "ACCESS_TOKEN",
    'oauth_access_token_secret' => "ACCESS_TOKEN_SECRET",
    'consumer_key' => "CONSUMER_KEY",
    'consumer_secret' => "CONSUMER_SECRET"
);
     $value="2487956";
	 $apiUrl = "https://api.twitter.com/1.1/trends/place.json";
        $requestMethod = 'GET';
        $getField = '?id=' .  $value; 
        $twitter = new TwitterAPIExchange($settings);
        $response = $twitter->setGetfield($getField)->buildOauth($apiUrl, $requestMethod)->performRequest(); 
        $data = json_decode($response,false);
        $result = $data[0]->trends;
		foreach ($result as $item) { 
         echo $item->name."<br><hr>";
		}
?>
<style>
body{
    background: url(background.jpg);
    background-size: cover;

}
</style>

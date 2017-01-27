<html>
<body>
<h3>The New Tweet has been Posted on your Timeline</h3>
<form>
<div id="App1"><input type="button" name="app1" value="Back" onclick="window.location.href='http://localhost:8082/Project/API.html'"></div>
</form>
</body>
</html>
<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token' => "ACCESS_TOKEN",
    'oauth_access_token_secret' => "ACCESS_TOKEN_SECRET",
    'consumer_key' => "CONSUMER_KEY",
    'consumer_secret' => "CONSUMER_SECRET"
);

$apiurl = "https://api.twitter.com/1.1/statuses/update.json";
 
$requestMethod = 'POST'; 
 
$postfields = array(
    'status' => ' THIS IS A TEST RETWEET'
);
 
$twitter = new TwitterAPIExchange($settings);
 
$response = $twitter->buildOauth($apiurl, $requestMethod)
                   ->setPostfields($postfields)
                   ->performRequest();
?>
<style>
body{
    background: url(background.jpg);
    background-size: cover;

}
</style>
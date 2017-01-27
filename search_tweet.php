<html>
<body>
<h2>Your Profile Picture</h2>
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
$apiurl = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=#PM MODI&count=10';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
                    ->buildOauth($apiurl, $requestMethod)
                    ->performRequest();
 
$tweets = json_decode($response);
echo "<br /><hr /> THESE ARE THE TWEET MACTCHING FOR #PM MODI"; 
foreach($tweets->statuses as $tweet)
{
    echo "<br /><hr />".$tweet->text . PHP_EOL;
}
echo "<br /><hr />";
?>
<style>
body{
    background: url(background.jpg);
    background-size: cover;

}
</style>

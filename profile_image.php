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
echo "USER PROFILE <br /><hr />";
$apiurl = 'https://api.twitter.com/1.1/users/show.json';
$requestMethod = 'GET';
$getfield = '?screen_name=sumukhahr';
$twitter = new TwitterAPIExchange($settings);

$json = $twitter->setGetfield($getfield)
                 ->buildOauth($apiurl, $requestMethod)
                 ->performRequest();
$result = json_decode($json); 
echo " The image url is:".$result->profile_image_url;

$imageData = base64_encode(file_get_contents($result->profile_image_url));
echo "<br /><hr />This is my PROFILE PICTURE <br /><hr />";
echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
echo "<br /><hr />";
?>
  

<style>
body{
    background: url(background.jpg);
    background-size: cover;

}
</style>
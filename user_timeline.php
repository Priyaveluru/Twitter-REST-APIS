<html>
<body>
<h1>Latest Trends</h1>
<form>
<div id="App1"><input type="button" name="app1" value="Back" onclick="window.location.href='http://localhost:8082/Project/API.html'"></div>
</form>
</body>
</html>
<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token' => "2646831553-K15d5S0sUKLiNMMKUzpZElJXpT4Da8Z1dVSFB3I",
    'oauth_access_token_secret' => "96KbgS4BgO5TNJ1nXkQoTyyRaRj64DpwX5SFB64RguPAm",
    'consumer_key' => "T9HLDVhu1efiUQ5m1nKAsOoaZ",
    'consumer_secret' => "4JRX12k0KH71o79BexWw5nFfyxDRB09EiUu6m8nCSA1MEinCTF"
);

$apiurl = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
if (isset($_GET['user']))  {$user = $_GET['user'];}  else {$user  = "sumukhahr";}
if (isset($_GET['count'])) {$count = $_GET['count'];} else {$count = 20;}
$getfield = "?screen_name=$user&count=$count";
$twitter = new TwitterAPIExchange($settings);
$content = json_decode($twitter->setGetfield($getfield)
->buildOauth($apiurl, $requestMethod)
->performRequest(),$assoc = TRUE);
foreach($content as $results)
    {
        echo "Time and Date of Tweet: ".$results['created_at']."<br />";
        echo "Tweet: ". $results['text']."<br />";
        echo "Tweeted by: ". $results['user']['name']."<br />";
        echo "Screen name: ". $results['user']['screen_name']."<br />";
        echo "Followers: ". $results['user']['followers_count']."<br />";
        echo "Friends: ". $results['user']['friends_count']."<br />";
        echo "Listed: ". $results['user']['listed_count']."<br /><hr />";
    }
echo "<br /><hr />";	

?>
<style>
body{
    background: url(background.jpg);
    background-size: cover;

}
</style>
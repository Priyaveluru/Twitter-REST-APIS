<html>
<body>
<h1>Messages</h1>
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
     $apiurl = 'https://api.twitter.com/1.1/direct_messages.json'; 
     $getfield = '?since_id=240136858829479935&count=3';
     $requestMethod = 'GET';
     $twitter = new TwitterAPIExchange($settings);
     $content = json_decode($twitter->setGetfield($getfield)
         ->buildOauth($apiurl, $requestMethod)
         ->performRequest(),$assoc = TRUE);
		 
		
		 foreach($content as $results)
		 {
			    echo "Msg: ".$results['text']."<br/>";
				echo "Msg: ".$results['created_at']."<br/>";
				echo "Sender: ".$results['sender']['screen_name']."<br/><hr/>";
				
           }
		
?>
<style>
body{
    background: url(background.jpg);
    background-size: cover;

}
</style>
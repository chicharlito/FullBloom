<?php

require "twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

define("CONSUMER_KEY", "XSyiSHJRvww8cXl6XZ9yE924h");
define("CONSUMER_SECRET", "I0F5nnhATIA43gm1uOjkiiHickMEeuU7iCVUbcGIbr5DfZ5kGS");
define("ACCESS_TOKEN", "973773553-g4YVeA59NZPiI2Tx9OAyz0SW9YiuAd1w8pDWGIoh");
define("ACCESS_TOKEN_SECRET", "Ex7t5hzCLd3JQMA47qNgT9MQVhZoBd1a6CTCpAszzMDKX");


function getConnectionWithAccessToken() {
  $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
  return $connection;
}

$connection = getConnectionWithAccessToken();
// $content = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?count=2");
$contents = $connection->get("statuses/user_timeline", ["screen_name" => "adeliusgroup", "count" => "2"]);

$json = $contents = json_encode($contents);

$books = json_decode($json, true);

function convertToFrenchDate($date){
	$Ndate = new DateTime($date);
	$day = $Ndate->format("d");
	$year = $Ndate->format("Y");
	$monthEN = $Ndate->format("m");
	
	switch($monthEN){
		case "01":
		$monthFR = "janvier";
		break;
		
		case "02":
		$monthFR = "février";
		break;
		
		case "03":
		$monthFR = "mars";
		break;
		
		case "04":
		$monthFR = "avril";
		break;
		
		case "05":
		$monthFR = "mai";
		break;
		
		case "06":
		$monthFR = "juin";
		break;
		
		case "07":
		$monthFR = "juillet";
		break;
		
		case "08":
		$monthFR = "août";
		break;
		
		case "09":
		$monthFR = "septembre";
		break;
		
		case "10":
		$monthFR = "octobre";
		break;
		
		case "11":
		$monthFR = "novembre";
		break;
		
		case "12":
		$monthFR = "décembre";
		break;
	}
	
	return $finalDate = $day." ".$monthFR." ".$year;
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
	<h3>Deux derniers tweets du Groupe Adélius</h3>
	<p>Le script interroge leur Twitter avant chaque affichage pour <strong>toujours afficher les deux derniers tweetZères du groupe</strong></p><hr />
		<?php
			foreach($books as $book)
			{
				$dateConverted = convertToFrenchDate($book['created_at']); 
				echo "<p><strong>Date :</strong>".$dateConverted."<br /><strong>Texte :</strong>".$book['text']."</p>";
			}
		?>
	</body>
</html>
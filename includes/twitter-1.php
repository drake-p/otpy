<?php
ini_set('display_errors', 0);

function getTwitterStatus($userid){
$url = "https://api.twitter.com/1/statuses/user_timeline/$userid.xml?count=1&include_rts=1callback=?";

$xml = simplexml_load_file($url);

       foreach($xml->status as $status){
       $text = $status->text;
       }
       if (strlen($text)<5) //maybe need a better test. $text seems to grab a whitespace even when the url doesn't work
              $text = "Unable to load news stream. Sorry!";
       echo $text;
 }

// USAGE
getTwitterStatus("OnThePathYoga");

?>
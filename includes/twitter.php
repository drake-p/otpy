<?php
ini_set('display_errors', 0);

function getTwitterStatus($userid, $x){
$url = "https://api.twitter.com/1/statuses/user_timeline/$userid.xml?count=$x&include_rts=1callback=?";

$xml = simplexml_load_file($url) or die("Unable to load news stream. Sorry!");

       foreach($xml->status as $status){
       $text = $status->text;
       echo "<li>" . $text . "</li>";
       }
 }

// USAGE
getTwitterStatus("OnThePathYoga", $count);
?>
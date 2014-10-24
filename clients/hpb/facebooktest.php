<?php
	//function to retrieve posts from facebook's server
function loadFB($fbID){
	// this is the URL that gets the data from facebook
	// the ?limit=20 tells facebook how many posts we want
	// since we're filtering out some posts you may need to mess with this a bit
	
	//be sure to update this access token
	$myFBToken="e89f7b483acdf524fdb6d21c20716d2f";
	
	//must be https when using an access token
	$url="https://graph.facebook.com/".$fbID."/feed?access_token=".$myFBToken."&limit=20";
	//load and setup CURL
	$c = curl_init($url);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	//don't verify SSL (required for some servers)
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);			
	//get data from facebook and decode JSON
	$page = json_decode(curl_exec($c));
	//close the connection
	curl_close($c);
	//return the data as an object
	return $page->data;
}

//BE SURE to enter your facebook id here
$fbID="343716449075627";
//how may posts to show
$fbLimit=10;
//variable used to count how many we've loaded
$fbCount=0;

//call the function and get the posts from facebook
$myPosts=loadFB($fbid);
print_r($myPosts);
//set timezone (change this to your timezone)
date_default_timezone_set("America/Chicago");

//loop through all the posts we got from facebook
foreach($myPosts as $dPost){
	//only show posts that are posted by the page admin
	if($dPost->from->id==$fbid){
		//get the post date / time and convert to unix time
		$dTime = strtotime($dPost->created_time);
		//format the date / time into something human readable
		//if you want it formatted differently look up the php date function
		$myTime=date("M d Y h:ia",$dTime);
		//output the date / time
		echo("<b>".$myTime."</b> ");
		//output the message body
		echo($dPost->message);
		//add a line break to separate comments
		echo("<br /><br />");	
		//increment counter
		$fbCount++;
		//if we've outputted the number set above in fblimit we're done
		if($fbCount >= $fbLimit) break;	
	}
}
?>
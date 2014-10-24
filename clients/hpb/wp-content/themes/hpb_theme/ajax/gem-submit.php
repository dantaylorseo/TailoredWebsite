<?php
	//print_r($_POST);
	$error = 0;
	$beer = 0;
	$brewery = 0;
	$email = 0;
	if($_POST['beer'] == '') { $beer = 1; $error ++; }
	if($_POST['brewery'] == '') { $brewery = 1; $error ++; }
	if($_POST['email'] == '') { $email = 1; $error ++; }
	
	if($error == 0)
	{
		if(mail('dan@tailored.im,chris@handpickedbeers.co.uk', 'New Brew Submitted', "New Brew submitted: \r\n\r\nBrew Name: ".$_POST['beer']."\r\nBrewery: ".$_POST['brewery']."\r\nBy: ".$_POST['email'], "From:".$_POST['email']))
		{
			echo '<p>Your hidden gem was sent successfully.</p>';	
		} else {
			echo '<p>There was an error sending your hidden gem. Please try again later.</p>';	
		}
	} else {
		echo '<p>Use this form to suggest a beer that we could add to our monthly boxes.</p>';
		echo '<input type="text" name="beer" class="gemform" '.($beer == 0 ? 'value="'.$_POST['beer'].'"' : 'title="Name of beer"').' />';
		if($beer ==1) echo '<br/><span class="error">Please enter beer name</span>';
		echo '<input type="text" name="brewery" class="gemform" '.($brewery == 0 ? 'value="'.$_POST['brewery'].'"' : 'title="Name of brewery"').' />';
		if($brewery ==1) echo '<br/><span class="error">Please enter brewery name</span>';
		echo '<input type="text" name="email" class="gemform" '.($email == 0 ? 'value="'.$_POST['email'].'"' : 'title="Email Address"').' />';
		if($email ==1) echo '<br/><span class="error">Please enter email address</span>';
		echo '<input name="beersub" type="submit" class="button" value="Send" id="beersub" />';
	}
?>
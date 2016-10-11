<?php 
global $base_url; 
global $theme_path;

$timeOfDay = "";
$hour = (int)date("G");

if($hour <= 11.0)
{
$timeOfDay = "morning";
}

elseif($hour > 11.0 && $hour < 18.0)
{
$timeOfDay = "afternoon";
}

elseif($hour >= 18.0)
{
$timeOfDay = "evening";
}
?>


<div id="profile">

	
	<?php
	print ('<h1>Good ' . $timeOfDay . '<span id="username"> ' . $user->name . '</span>.  You are now logged in.</h1>');
	?>
	
	<h2>Please pick one of the following:</h2>
	<p>
	<a href="/">Go to the home page</a>.
	</p>	
	<p>
	<a href="../node/add">Add content</a>.
	</p>

</div>
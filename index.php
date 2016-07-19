<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<table>
		<tr>
			<td style='width: 30%;'><img class = 'newappIcon' src='images/newapp-icon.png'>
			</td>
			<td>
				<h1 id = "message"><?php echo "Hello world!"; ?>
</h1>
<?php 
//Get DB's
$returned_content = get_data('https://atinergendisliongervetiv:61b9fd84652142b536ae9d64cd15f270b041da8b@bfc8dd0e-10c9-4fe2-b4a0-f7a1ef7a0237-bluemix.cloudant.com/iotp_7y3vwc_data_2016-07/_find');

function get_data($url) 
{
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}   
?>
				<p class='description'></p> Thanks for creating a <span class="blue">PHP Starter Application</span>. To get started see the Start Coding guide under your app in your dashboard.
			</td>
		</tr>
	</table>
</body>
</html>

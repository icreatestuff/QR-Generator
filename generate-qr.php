<?php
	// Get type content
	if (isset($_POST['url']) && !empty($_POST['url']))
	{
		$content = urlencode($_POST['url']);
	}
	
	if (isset($_POST['text_content']) && !empty($_POST['text_content']))
	{
		$content = urlencode($_POST['text_content']);
	}

	if (isset($_POST['telephone_number']) && !empty($_POST['telephone_number']))
	{
		$content = "TEL:" . $_POST['telephone_number'];
	}
	
	if (isset($_POST['sms_telephone_number']) && !empty($_POST['sms_telephone_number']))
	{
		$content = "SMSTO:" . $_POST['sms_telephone_number'];
		
		if (isset($_POST['sms_text_content']) && !empty($_POST['sms_text_content']))
		{
			$content = "SMSTO:" . $_POST['sms_telephone_number'] . ":" . urlencode($_POST['sms_text_content']);
		}
	}
	
	// Get Size
	if (isset($_POST['size']) && !empty($_POST['size']))
	{
		$size = $_POST['size'];
	}
	
	$url = "http://chart.apis.google.com/chart?cht=qr&chs=" . $size . "x" . $size. "&chl=" . $content . "&choe=UTF-8&chld=L|0 ";
	
	echo $url;
?>
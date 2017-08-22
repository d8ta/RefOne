<?php

$logo = Project\Application::getInstance()->getConfig('media.logo');
$client = Project\Application::getInstance()->getConfig('client');

use A365\Wordpress\Helpers\Acf\OptionsHelper;
$optionsHelper = OptionsHelper::getInstance();

$label_thank = __('Thank you for your message');
$label_soon = __('We will contact you by the next working day.');
$label_control = __('Your data for checking');

$label_message = __('Your Message');
$label_name = __('Name');
$label_company = __('Company');
$label_phone = __('Phone');
$label_email = __('Email');


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: lightgrey;">
	<table style="margin: 3em auto; background: white; padding: 3em; width: 35em;">
		<thead>
			<tr>
				<td><img src="{{get_site_url()}}/{{$logo}}" alt="{{get_bloginfo()}}"></td>
			</tr>
			<tr>
				<td><h1>{{$label_thank}}</h1></td>
			</tr>
			<tr>
				<td><p>{{$label_soon}}</p></td>
			</tr>
			<tr>
				<td><h2>{{$label_control}}</h2></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><strong>{{$label_name}}: </strong> {{$name}}</td>
			</tr>
			<tr>
				<td><strong>{{$label_company}}:</strong> {{$company}}</td>
			</tr>
			<tr>
				<td><strong>{{$label_phone}}:</strong> {{$phone}}</td>
			</tr>
			<tr>
				<td><strong>{{$label_email}}:</strong> {{$email}}</td>
			</tr>
			<tr>
				<td><strong>{{$label_message}}:</strong> <span style="font-style: italic">{!!nl2br($message)!!}</span></td>
			</tr>

		</tbody>
	</table>

	<table>
		<tr>
		   <p style="text-align: center;""><small>hobex AG, Josef-Brandstätter-Straße 2b, 5020 Salzburg, +43 662 2255-0, <a href="mailto:office@hobex.at">office@hobex.at</a>, <a href="http://www.hobex.at">www.hobex.at</a></small></p>
		</tr>
	</table>  
	
</body>
</html>
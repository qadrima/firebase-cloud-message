<?php
// API access key from Google API's Console
define('API_ACCESS_KEY','AAAAq2I7R6Y:APA91bGqs8xXccCZQ-IwFHl8k_4wDnwKCH5AvVC6E86__yD2bYu_uxhYpnsT7ZATjoFJX_9T1YusGuMXZWh8_BbrmjorwwPocgms8JGJx1oAGJAchQnPMqM3JYjJMh3RX_Ygra5-hje8');

$url = 'https://fcm.googleapis.com/fcm/send';

$registrationIds = array('cyg1P0JZxL7KCiQZCHjisx:APA91bFlZxrfdvfo1xNVeSdC1HplCzIDoE9CmH3FVzRKPw1tGZrJyu7ocNJmzOe0bmfAtHl7BAT7RqdQmQ14BQBpUbUJlR0RQm49KiIET0nxPigs-so5jE48brl933P0XrY3125EG-ce');

#Prepare the message
$fields = array( 
	'registration_ids' => $registrationIds, 
	'notification'     => array( 
		'title'     => 'This is a title.',
		'body'      => 'Here is a message.'
	)
);

$headers = array( 
	'Authorization: key='.API_ACCESS_KEY, 
	'Content-Type: application/json'
);

$ch = curl_init();
curl_setopt( $ch,CURLOPT_URL,$url);
curl_setopt( $ch,CURLOPT_POST,true);
curl_setopt( $ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt( $ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt( $ch,CURLOPT_POSTFIELDS,json_encode($fields));
$result = curl_exec($ch);
curl_close($ch);

echo $result;
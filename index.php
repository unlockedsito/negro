<?php 
$bot_token = 'YOUR-BOT-TOKEN';
$website = 'https://api.telegram.org/bot'.$bot_token;
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
if($message == '/start'){
	sendMessage($chatId, 'Hi, how may i help u?');
} else if($message == 'hi') {
	sendMessage($chatId, 'Hi, fucking bitch!');
} else if($message == 'ola') {
	sendMessage($chatId, 'se dice "Hola" aprende a escribir bien CTM o te vas de mi iglesia :V');
} else if($message == 'hola') {
	sendMessage($chatId, 'Tu nariz contra mi bola :V');

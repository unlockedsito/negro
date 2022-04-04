<?php

include 'Telegram.php';

$bot_id = '5127658543:AAGXX_9uouyc64fuv3qVVdFLESAL_TyOoSY';
$telegram = new Telegram($bot_id);

$text = $telegram->Text();
if($text == '/start') {
	$telegram->sendMessage(array(
		'chat_id' => $telegram->ChatID(),
		'text' => 'Hi, how may i help u?'
	));
}

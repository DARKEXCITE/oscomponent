<?php
	$name = $_POST['name'];
	$model = $_POST['model'];
	$phone = $_POST['phone'];
	$userMessage = $_POST['message'];
	
	$message = 	"OS Component | Новая заявка на ремонт! \n\n" .
					"Имя отправителя: " . $name . "\n" .
					"Телефон отправителя: " . $phone . "\n" .
					"Модель устройства отправителя: " . $model . "\n\n" .
					"Неисправность: \n" . $userMessage;

	$subject = "=?utf-8?B?".base64_encode("Новая заявка на ремонт")."?=";

	$email_from = 'sos@os-component.ru';
	$name_from = 'OS Component';

	$headers = 	"MIME-Version: 1.0" . PHP_EOL .
					"Content-Type: text/html; charset=utf-8" . PHP_EOL .
					"From: " . "=?utf-8?B?".base64_encode($name_from)."?=" . "<" . $email_from . ">" . PHP_EOL .
					"Reply-To: " . $email_from . PHP_EOL;

	mail('sos@os-component.ru', $subject, $message, $headers);
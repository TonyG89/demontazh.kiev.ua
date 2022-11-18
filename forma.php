<?php
//Если форма отправлена
if(isset($_POST['submit'])) {

	//Проверка Поля ИМЯ
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Проверка поля ТЕМА
	if(trim($_POST['subject']) == '') {
		$hasError = true;
	} else {
		$subject = trim($_POST['subject']);
	}

	//Проверка правильности ввода EMAIL
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = '**@ukr.net, **@gmail.com, zakaz@demontazh-expert.kiev.ua'; //Сюда введите Ваш email
		$body = "Имя: $name \n\nE-mail: $email \n\nТелефон: $subject";
		$headers = 'From: Landing www.demontazh.kiev.ua <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}

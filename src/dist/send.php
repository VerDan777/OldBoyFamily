<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if ($post = mso_check_post('field')) 
{
	$to = 'vereshhagin98@mail.ru'; // адрес получателя
	$subject = 'Тема письма'; // тема письма
	
	$email = $post['field']['email']; // поле email
	
	// проверка emil
	if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		echo 'Неверный email! Обновите страницу (F5) и укажите правильный адрес';
		exit;
	}
		
	
	// формируем headers для письма
	$headers = 'From: '. $email . "\r\n"; // от кого

	// формируем тело сообщения
	$message = 'Email: ' . $email . NR . NR . NR . $message; 
	 
	// кодируем заголовок в UTF-8
	$subject = preg_replace("/(\r\n)|(\r)|(\n)/", "", $subject);
	$subject = preg_replace("/(\t)/", " ", $subject);
	$subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';

	// отправка
	@mail($to, $subject, $message, $headers);

	echo 'Спасибо, ваше сообщение отправлено!';
}

# end of file
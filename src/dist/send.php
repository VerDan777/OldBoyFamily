<?
if((isset($_POST['email'])&&$_POST['email'])!="") {
	$to = 'vereshhagin98@mail.ru';
	$subject = 'Подписка на рассылку';
	$message ='<html>
					<head>
						<title>'.$subject.'</title>
					</head>
					<body>
						<p>E-mail: '.$_POST['email'].'</p>
					</body>
				</html>';
	$headers = "Content-type: text/html; charset=utf-8 \r\n";
	$headers .="From: Отправитель<from@example.com>\r\n";
	mail($to, $subject, $message, $headers);
}

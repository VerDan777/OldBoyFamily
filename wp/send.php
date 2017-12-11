
<?php
/*
    Template Name: Send Page
*/
?>
<?
if((isset($_POST['email'])&&$_POST['email']!="")){
        $to = 'CoolBariga98@yandex.ru';
        $subject = 'Обратный звонок';
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                    </body>
                </html>';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: Отправитель <from@example.com>\r\n";
        mail($to, $subject, $message, $headers); 
}
?>

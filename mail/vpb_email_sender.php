<?php 
    
    //print_r($_POST);
    
    //echo '<div id="vpb_sent">YO!</div>';
    if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['mail'])) {
    $to      = 'glaz1noe@gmail.com';
    $subject = 'Заявка с сайта demontazh.kiev.ua';
    $message = 'Имя: '.$_POST['name']." \r\nТелефон: ".$_POST['phone']." \r\nE-mail: ".$_POST['mail'];
    $headers = 'From: '.$_POST['mail'] . "\r\n" .
    'Reply-To: '.$_POST['mail'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

        if(mail($to, $subject, $message, $headers)) { 
            echo '<div id="vpb_sent">Ваша заявка успешно отправлена</div>'; 
        } else {
            echo '<div>Что-то пошло не так</div>';
        }
    } else {
        echo '<div>Вы заполнили не все поля</div>';
    }

?>
<?php 
require_once "wp-load.php";
echo mail('anzarsh@mail.ru', 'Subject', "message")?"сообщение отправленно":"сообщение не отправленно";
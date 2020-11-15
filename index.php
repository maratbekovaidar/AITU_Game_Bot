<?php

$data = json_decode(file_get_contents('php://input'), TRUE);
file_put_contents('file.txt', '$date: '.print_r($date, 1)."\n", FILE_APPEND);

//Обработка

https://api.telegram.org/bot1446264305:AAH-Xk0We8VPfgCarvzSZnh2CNHDc9RSC90/setwebhook?url=https://github.com/maratbekovaidar/AITU_Game_Bot/blob/main/index.php

?>
<?php

$data = json_decode(file_get_contents('php://input'), TRUE);
file_put_contents('file.txt', '$date: '.print_r($date, 1)."\n", FILE_APPEND);


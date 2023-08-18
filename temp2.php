<?php
// Получает содержимое файла в виде массива. В данном примере мы используем
// // обращение по протоколу HTTP для получения HTML-кода с удаленного сервера.
// $lines = file('code.html');

$lines = 'meta name="keywords" content="_keyword_">';

// strpos - ищет вхождение в строке

if (!strpos("meta name=\"keywords\"", $lines)) {

    echo 'Новая строка';

}

// echo '<pre>';
// print_r($lines);
// echo '</pre>';

// Осуществим проход массива и выведем содержимое в виде HTML-кода вместе с номерами строк.
// foreach ($lines as $line_num => $line) {
//     echo "Строка #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
// }

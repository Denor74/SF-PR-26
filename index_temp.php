<?php

// Подгружаем библиотеку SimpleHTMLDOM - надстройка класс DOMDocument
include 'library/simple_html_dom.php';
// получаем объект типа simple_html_dom  загружаем html код из файла - 
$html = new simple_html_dom();
$html->load_file('code.html');
//echo '<pre>';
//var_dump($html);
$metaDescription =  $html->find("meta[name='description']", 0)->content = '_description_';
$metaKeywords = $html->find("meta[name='keywords']", 0)->content = '_keyword_';
  $metaTitle =  $html->find('title');

echo $metaDescription . PHP_EOL;

//---echo $metaKeywords . PHP_EOL;


  $metaTitle[0]->innertext = "_title_";
  //---echo $metaTitle[0];


//echo $html->save();
// Сохраняем файл Подгружаемый библиотекой SimpleHTMLDOM
$html->save("code.html");

// $htmlDOM = new DOMDocument('1.0');
// // мы хотим красивый вывод
// $htmlDOM->formatOutput = true;
// $htmlDOM->loadHTMLFile("code.html");
// $htmlDOM->saveHTML("/codedom.html");
//echo '</pre>';
/*
file() - Читает содержимое файла и помещает его в массив
fgets() - Читает строку из файла
fread() - Бинарно-безопасное чтение файла
readfile() - Выводит файл

********************************************************
file_get_contents — Читает содержимое файла в строку
file_put_contents() - Пишет данные в файл
preg_replace — Выполняет поиск и замену по регулярному выражению

str_replace — Заменяет все вхождения строки поиска на строку замены
************************************************************

stream_get_contents() - Читает оставшуюся часть потока в строку
stream_context_create() - Создаёт контекст потока


*/


/*
// Создаем новый объект DirectoryIterator
$dir = new DirectoryIterator("./");

// Цикл по содержанию директории
foreach ($dir as $item) {
    echo $item . "<br>";
}
*/
/*
echo '<pre>';
echo '****************************************';
echo 'get_meta_tags';
echo '****************************************';
echo '</pre>';
$tags = get_meta_tags('code.phtml');
echo '<pre>';
var_dump($tags);
echo '</pre>';
*/

/*
echo '<pre>';
echo '****************************************';
echo 'file';
echo '****************************************';
echo '</pre>';
$file = 'code.phtml';
$fileLines = file($file);//file in to an array
echo '<pre>';
// var_dump($fileLines);
echo '</pre>';
*/


/*
echo '<pre>';
echo '****************************************';
echo 'file_get_contents Получить и вывести исходный код домашней страницы сайта';
echo '****************************************';
echo '</pre>';


$homePage = file_get_contents('code.phtml');
echo $homePage;
*/

/*
$page = file_get_contents('code.phtml');
// echo $page;

$arrPage = explode(' ', $page);

echo '<pre>';
print_r($arrPage);
echo '</pre>';
*/


/*
echo '<pre>';
echo '****************************************';
echo 'DOMDocument()';
echo '****************************************';
echo '</pre>';
$doc = new DOMDocument();
// $doc->loadHTMLFile("code.html");

// saveHTML — Сохраняет документ из внутреннего представления в строку, используя форматирование HTML
var_dump($doc->saveHTML()) ;

// получить по tag name div, span, a и тд
$title = $doc->getElementsByTagName('title'); 

echo $title;

*/

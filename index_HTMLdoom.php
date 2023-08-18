<?php

// Подгружаем библиотеку SimpleHTMLDOM - надстройка класс DOMDocument
include 'library/simple_html_dom.php';

// получаем объект типа simple_html_dom  загружаем html код из файла - 
$html = new simple_html_dom();

// заполняем объект из файла html
$html->load_file('code.html');


// ищем набор дескрипторов meta name="description" и заменяем значение на _description_
$metaDescription =  $html->find("meta[name='description']", 0)->content = '_description_';

// ищем набор дескрипторов meta name="keywords" и заменяем значение на _keyword_
$metaKeywords = $html->find("meta[name='keywords']", 0)->content = '_keyword_';

// ищем тэги title и заменяем содержимое на _title_
$metaTitle =  $html->find('title');

$metaTitle[0]->innertext = "_title_";

// сохраняем файл c изменёнными значениями
$html->save("code.html");

/*
    class MetaHTMLIterator implements Iterator {



    public function __construct()
    {
        
    }

// Этот метод сбрасывает указатель файла (Iterator::rewind — Возвращает итератор на первый элемент)
    public function rewind(): void
{
    
}
// Iterator::current — Возврат текущего элемента
public function current(): mixed // mixed - высший тип данных (включает все остальные)
{
    
}
// Iterator::key — Возвращает ключ текущего элемента
public function key(): mixed
{
    
}

/*
void - это объявление типа только для возвращаемого значения, указывающее на то, 
что функция не возвращает значение, но функция всё равно может завершиться.


*******************************
*/

// Iterator::next — Переходит к следующему элементу
// public function next(): void
// {

// }



/* Iterator::valid — Проверяет корректность текущей позиции
******
Метод вызывается после функций Iterator::rewind() и Iterator::next() чтобы проверить, допустима ли текущая позиция.
******
Возвращаемое значение будет приведено к логическому типу (bool) и затем использовано. 
Возвращает true в случае успешного выполнения или false в случае возникновения ошибки.
*/
// public function valid(): bool
// {
//     return true;
// }

// }




// Подгружаем библиотеку SimpleHTMLDOM - надстройка класс DOMDocument
// include 'library/simple_html_dom.php';
// получаем объект типа simple_html_dom  загружаем html код из файла - 
// $html = new simple_html_dom();





//************************************************************** 

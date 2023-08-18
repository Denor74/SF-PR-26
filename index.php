<?php

namespace RefactoringGuru\Iterator\RealWorld;

// Создаём Iterator для обработки html файла и удаления meta данных
class HtmlIterator implements \Iterator
{
    // Массив для хранения строк html файла
    private $htmlArray = [];


    public function __construct($file, $delimiter = '<')
    {
       
       
        $fileString = file_get_contents($file);


        // Разбиваем html файл на массив с разделителем $delimiter
        $fileArray = explode($delimiter,  $fileString);

        $this->htmlArray = $fileArray;

        //  echo '<pre>';
        // var_dump($currentElement);
        // echo '</pre>';
    }


    public function rewind()
    {
        // устанавливаем внутренний указатель массива на его первый элемент
        reset($this->htmlArray);
    }

    // Возвращаем строку с html кодом
    public function current()
    {
        // Переменные для поиска подстрок в строке html кода
        $metaKeywords = 'name="keywords"';
        $delimiter = '<';
        $metaTitle = "title>";
        $metaDescription = 'name="description"';
        $emptyString = "";
        // Значение текущего элемента массива (строка html кода)
        $htmlString = current($this->htmlArray);

        // Ищем вхождение подстроки в значении элемента массива
        if (strpos($htmlString, $metaDescription) || strpos($htmlString, $metaKeywords) || strpos($htmlString, $metaTitle) || strpos($htmlString, $emptyString)) {
            // Если есть совпадение обнуляем значение строки
            $resultString = "";

            // if (!strpos(current($this->htmlArray), $metaDescription)) {
            //     $result = current($this->htmlArray);
            // }
        } else {
            // Если совпадений нет - возвращаем значение строки        
            $resultString = $htmlString;
        }

        return $resultString;
    }

    /**
     * Этот метод возвращает номер текущей строки.
     *
     * @return int Номер текущей строки.
     */
    public function key()
    {
        // Возвращаем ключ текущего элемента массива
        return key($this->htmlArray);
    }

    public function next()
    {

        //Переводим указатель массива на один вперёд
        return next($this->htmlArray);
    }

    /**
     * Этот метод проверяет, является ли следующая строка допустимой.
     *
     * @return bool Если следующая строка является допустимой.
     */
    public function valid(): bool
    {
        // Проверяем есть ли ещё элементы в массиве
        $result = $this->current() !== false;
        return $result;
    }
}

/**
 * Клиентский код.
 */

// путь к файлу html
$file = __DIR__ . "/code.html";

// Файл с обновлённым кодом
$fileNew = __DIR__ . "/codeNew.html";
$html = new HtmlIterator($file);

foreach ($html as $key => $row) {
    // Определяем нужно ли вставлять разделитель в код html файла
    // во избежании вставки излишних разделителей
    if (empty($row)) {
        $row = "";
    }
    else {
        $row = '<' . $row;
    }
    file_put_contents($fileNew, $row, FILE_APPEND);
    //echo $key . ": " . $row . "<br />\n";
}

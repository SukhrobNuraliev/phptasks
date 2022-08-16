<?php

$results = array(
    0 => array(
        'name' => 'Shaytanat',
        'author' => 'Toxir Malik',
        'year' => 2006
    ),
    1 => array(
        'name' => 'Zulmatdagi saltanat',
        'author' => 'Abdurahimov O‘tkir',
        'year' => 2019
    ),
    2 => array(
        'name' => 'Двойник',
        'author' => 'Фёдор Достоевский',
        'year' => 1846,
    ),
);

class ListBooks
{
    public function __construct($list)
    {
        $html = "";

        foreach ($list as $book) {
            $html .= "<h3>Kitob: {$book['name']}</h3>
                      <p>{$book['author']} | {$book['year']}</p>";
        }

        echo $html;
    }
}

$list = new ListBooks($results);

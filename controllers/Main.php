<?php
require_once 'models/Database.php';
class Main extends Core
{
	public function fetch()
	{
	    $obj = new Database();
	    $q = "SELECT * FROM books";
	    $obj->query($q);
	    $res = $obj->results();
		return $this->view->render('main.html', array('books' => $res));
	}
}
/*$books = array(
    array('number' => 'Книга 1', 'title' => 'Гарри Поттер и философский камень', 'date' => '30.06.1997'),
    array('number' => 'Книга 2', 'title' => 'Гарри Поттер и Тайная комната', 'date' => '2.07.1998'),
    array('number' => 'Книга 3', 'title' => 'Гарри Поттер и узник Азкабана', 'date' => '8.07.1999'),
    array('number' => 'Книга 4', 'title' => 'Гарри Поттер и Кубок огня', 'date' => '8.07.2000'),
    array('number' => 'Книга 5', 'title' => 'Гарри Поттер и Орден Феникса', 'date' => '21.07.2003'),
    array('number' => 'Книга 6', 'title' => 'Гарри Поттер и Принц-полукровка', 'date' => '16.07.2005'),
    array('number' => 'Книга 7', 'title' => 'Гарри Поттер и Дары Смерти', 'date' => '21.07.2007')
);*/
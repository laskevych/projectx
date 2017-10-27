<?php
require_once 'Database.php';
class GetBooks extends Database
{
	public function viewbooks()
	{
        $q = "SELECT * FROM books";
        $this->query($q);
        $this->results();
	}
}

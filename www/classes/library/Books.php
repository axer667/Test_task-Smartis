<?
namespace library;
// Описываем класс книги, копирующий структуру из БД
use config\Database;

class Books{
	private $id;
    public $author_id;
	public 	$title;

	public function getNumberOfBooks($author_id){ // Метод получения количества книг автора
		$query = 	"	
						SELECT
							count(*) AS number_of_books
						FROM 
							books
						WHERE 
							author_id = {$author_id}
					";
		return database::returnOneField($query);
	}

	public function getTable(){ // Метод, возвращающий данные для таблицы с авторами книг
		$query = 	"	
						SELECT
							b.title,
							a.`name`
						FROM
							books As b INNER JOIN
							authors AS a ON (b.author_id = a.id)
					";
		return Database::freeQueryDataback($query);
	}
}

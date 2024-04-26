<?
namespace library;
use config\Database;

// Описываем класс автора, копирующий структуру из БД
class Authors {
	private $id;
	public 	$name;

	public function getTable(){ // Метод, возвращающий данные для таблицы с количеством книг каждого автора
		$query = 	"	
						SELECT
							a.`name`,
							count(*) AS number_of_books
						FROM
							authors AS a INNER JOIN
							books AS b ON (a.id = b.author_id)
						GROUP BY
							a.id
					";
		return Database::freeQueryDataback($query);
	}
}
?>
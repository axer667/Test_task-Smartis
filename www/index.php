<?php
require_once ('Autoloader.php');

Autoloader::register("classes");

use library\Authors;
use library\Books;
use market\Fruits;

// Создаём экземпляры классов
$fruits = new Fruits();
$books = new Books();
$authors = new Authors();

// Строим HTML-таблицы
$tableOfFruits = 	"
						<table id='fruit_table' class='test_table'>
							<tr>
								<th>
									Fruit
								</th>
								<th>
									Weight
								</th>
							</tr>
					";

foreach ( $fruits->getTable() AS $k=>$v ){
	$tableOfFruits .= 	"
							<tr>
								<td>
									{$v['name']}
								</td>
								<td>
									{$v['weight']}
								</td>
							</tr>
						";
}

$tableOfFruits .=	"
						<tr id='block_button'>
							<td colspan='2'>
								<input type='button' value='Add fruit' id='add_fruit' data-trigger='add' />
								<span id='fruits_message'></span>
							</td>
						</tr>
						</table>
					";



$tableOfBook = 	"
						<table class='test_table'>
							<tr>
								<th>
									Book
								</th>
								<th>
									Author
								</th>
							</tr>
					";

foreach ( $books->getTable() AS $k=>$v ){
	$tableOfBook .= 	"
							<tr>
								<td>
									{$v['title']}
								</td>
								<td>
									{$v['name']}
								</td>
							</tr>
						";
}

$tableOfBook .=	"
						</table>
					";


$tableOfAuthors = 	"
						<table class='test_table'>
							<tr>
								<th>
									Author
								</th>
								<th>
									Number of book
								</th>
							</tr>
					";

foreach ( $authors->getTable() AS $k=>$v ){
	$tableOfAuthors .= 	"
							<tr>
								<td>
									{$v['name']}
								</td>
								<td>
									{$v['number_of_books']}
								</td>
							</tr>
						";
}

$tableOfAuthors .=	"
						</table>
					";

?> 

<html>

	<head>
		<link href="/css/style.css" rel="stylesheet">
		<title>
			Test
		</title>
	</head>

	<body>
		<!-- Выводим таблицы -->
			<?=$tableOfFruits?>
			<br/>
			<?=$tableOfBook?>
			<br/>
			<?=$tableOfAuthors?>
		
	</body>

	<script src="/js/jquery/jquery-3.4.1.min.js"></script>
	<script src="/js/script.js"></script>
</html>
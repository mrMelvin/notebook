<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/notebook.css">
	<title>Всё что насмотрено непосильным трудом</title>
</head>

<body>
	<div class="main-window">

			<table>
				<tr>
					<th>Название</th>
					<th>Страна</th>
					<th>Год</th>
					<th>Режиссёр</th>
					<th>Примерный жанр</th>		
				</tr>		

		
	<?php	
		require_once 'connection.php';
		$request_all_films = "SELECT name, country, year, director, genre FROM $TABLE_NAME";
		$all_films = $db->query($request_all_films);
		echo "Всего добавлено " . $all_films->num_rows . " фильма <br>"; 
		while($rows = $all_films->fetch_assoc()) {
	?>		
		<tr>
			<td>
				<?php				
				printf("%s<br>",$rows['name']);
				?>
			</td>
			<td>
				<?php				
				printf("%s<br>",$rows['country']);
				?>
			</td>
			<td>
				<?php				
				printf("%s<br>",$rows['year']);
				?>
			</td>
			<td>
				<?php				
				printf("%s<br>",$rows['director']);
				?>
			</td>
			<td>
				<?php				
				printf("%s<br>",$rows['genre']);
				?>
			</td>
			<td>
				<form action="delete_row.php" id="delete_row"> 
					<button form="delete_row">Удалить</button>
				</form>				
			</td>
		</tr>					

	<?php
		}
		$db->close();
	?>

	
	<div>
		<form action="adding.html" id="adding">
			<button form="adding" formtarget="_blank">Добавить!</button>
		</form>		
		
	</div>	
	
	</div>	
	
</body>
</html>
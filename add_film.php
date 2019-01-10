<?php
	require_once 'connection.php';
	
	$film_name = $_POST['film_name'];
	$film_country = $_POST['film_country'];
	$film_year = $_POST['film_year'];
	$film_director = $_POST['film_director'];
	$film_genre = $_POST['film_genre'];
	
	print_r($_POST);
	
	$write = "INSERT INTO $TABLE_NAME (name, country, year, director, genre) VALUES ('$film_name','$film_country','$film_year','$film_director','$film_genre')";
	if($db->query($write)) {
		echo "Всё отлично!";	
	} else {
		echo "Что-то пошло не так!";	
	}

?>

		<form action="notebook.php" id="return_main">
			<button form="return_main">Вернуться к списку фильмов</button>
		</form>	


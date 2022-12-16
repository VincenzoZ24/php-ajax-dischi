<main><?php
	$id = $_GET['title'];

	include_once __DIR__ . '/../db/data.php';

	
	$post_found = false;
	$i = 0;

	while ($post_found === false && $i < count($arr_songs)) {
		if ($arr_songs[$i]['title'] == $id) {
			$post = $arr_songs[$i];
			$post_found = true;
		}
		$i++;
	}

	if ($post_found) {
	 ?>
     <img src="<?= $song['poster'] ?>">
		<h2><?= $song['title'] ?></a></h2>
		
		<p><?= $song['author'] ?></p>
        <div><?php $song['year'] ?></div><?
	} else {
		echo ' canzone non trovata';
	}
	?>
</main>


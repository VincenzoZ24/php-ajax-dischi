<main><?php

        include_once __DIR__ . '/../db/data.php';

        foreach ($arr_songs as $song) { ?>
        <div>
            <img src="<?= $song['poster'] ?>">
            <h2><a href="?id=<?= $song['title'] ?>"><?= $song['title'] ?></a></h2>

            <p><?= $song['author'] ?></p>
            <div><?= $song['year'] ?></div>
        </div><?
            } ?>

</main>
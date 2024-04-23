<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="La proxima pelicula de marvel">
    <link rel="stylesheet" href="../assets/style.css">
    <title><?= $movie->get_title() ?></title>
</head>

<body>
    <main class="main">
        <section class="section-movie">
            <hgroup>
                <h1>
                    <?= $movie->get_title() ?> - <?= $untilMessage ?>
                </h1>
                <h3>
                    Fecha de Estreno: <?= $movie->get_release_date() ?>
                </h3>
                <h3>
                    Produccion de Tipo:: <?= $movie->get_type() ?>
                </h3>
                <h3>
                    ¿Que sigue despues? <?= $movie->get_following_production() ?>
                </h3>
            </hgroup>
            <img src="<?= $movie->get_poster_url() ?>" alt="proxima pelicula marvel">

        </section>
    </main>

</body>

</html>
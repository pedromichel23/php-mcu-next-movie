<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="La proxima pelicula de marvel">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Document</title>
</head>

<body>
    <!-- <pre class="pre">
        <?= var_dump($result) ?>
    </pre> -->
    <main class="main">
        <section class="section-movie">
            <hgroup>
                <h1>
                    <?= $result['title'] ?> - <?= $untilMessage ?>
                </h1>
                <h3>
                    Fecha de Estreno: <?= $result['release_date'] ?>
                </h3>
                <h3>
                    Produccion de Tipo:: <?= $result['type'] ?>
                </h3>
                <h3>
                    ¿Que sigue despues? <?= $result['following_production']['title'] ?>
                </h3>
            </hgroup>
            <img src="<?= $result['poster_url'] ?>" alt="proxima pelicula marvel">

        </section>
    </main>

</body>

</html>
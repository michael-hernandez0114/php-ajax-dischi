<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dischi - Solo PHP</title>
    </head>
    <body>

        <img src="" alt="">
        <h4>Ciao</h4>
        <span></span>
        <span></span>

        <?php include 'data.php';

        foreach ($dataDischi as $key => $disco) {
            echo 'Poster: ' . $disco[poster] . '<br>';
            echo 'Title: ' . $disco[title] . '<br>';
            echo 'Artist: ' . $disco[artist] . '<br>';
            echo 'Year: ' . $disco[year] . '<br><br><br>';
        }

        ?>

    </body>
</html>

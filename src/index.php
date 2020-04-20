<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>"Full Stack" - Dischi</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js" charset="utf-8"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="../dist/css/app.css">
    </head>
    <body>

        <header>
            <div class="container">
                <img src="img/logo.png" alt="">
            </div>

        </header>
        <main>

            <div id="card-container">

            </div>

        </main>
        <footer>

        </footer>

        <script id="card-template" type="text/x-handlebars-template">
            <div class="card">
                <div>
                <img src="{{imgAlbum}}" alt="">
                </div>
                <h4>{{albumName}}</h3>
                <span>{{artist}}</span>
                <span>{{year}}</span>
            </div>
        </script>
        <script src='js/main.js'>

        </script>

    </body>
</html>

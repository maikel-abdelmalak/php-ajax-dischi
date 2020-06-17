<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../dist/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js" integrity="sha256-usTqAE1ywvdMtksWzdeWzD75MsfJN0h0U7y2NtZL3N0=" crossorigin="anonymous"></script>
        <script src="../dist/main.js" charset="utf-8"></script>
        <title></title>
    </head>
    <body>
        <header>

        </header>
        <main>
            <div class="container">


            </div>
        </main>
    </body>
    <script id="card-template" type="text/x-handlebars-template">
        <div class="card">
            <img src="{{img}}" alt="">
            <p>{{titolo}}</p>
            <p>{{autore}}</p>
            <p>{{genere}}</p>
            <p>{{anno}}</p>
        </div>
    </script>
</html>

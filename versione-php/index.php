<?php include 'dischi.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../dist/style.css">
        <title></title>
    </head>
    <body>
        <header>

        </header>
        <main>
            <div class="container">
                <?php foreach ($dischi as $disco){
                    $img = $disco['poster'];

                    ?>
                        <div class="card">
                            <img src="<?php echo $img; ?>" alt="">
                            <p><?php echo $disco['title']; ?></p>
                            <p><?php echo $disco['author']; ?></p>
                            <p><?php echo $disco['genre']; ?></p>
                            <p><?php echo $disco['year']; ?></p>
                        </div>
                    <?php
                } ?>


            </div>
        </main>
    </body>
</html>

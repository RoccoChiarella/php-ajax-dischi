<?php include 'dischi.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dischi PHP</title>
        <link rel="stylesheet" href="../public/app.css">
    </head>
    <body>
        <header>
            <h1>PHP DISCHI</h1>
        </header>
        <main>
            <div class="disks">
                <div class="container">
                        <?php foreach ($disks as $disk) { ?>
                            <div class="card">
                                <img src="<?php echo $disk['poster'] ?>" alt="">
                                <p>
                                    <?php echo $disk['title'] ?>
                                </p>
                                <em class="author">
                                    <?php echo $disk['author'] ?>
                                </em>
                                <small class="year">
                                    <?php echo $disk['year'] ?>
                                </small>
                            </div>
                            <?php
                        } ?>
                </div>
            </div>
        </main>
    </body>
</html>

<?php
    include __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    
    <header>
        LOGO
    </header>

    <main>
        <div class="wrapper">
            <?php foreach($database as $album) { ?>
                <div class="album">
                    <div class="album-img">
                        <img src="<?php echo $album['poster']; ?>" alt="poster">
                    </div>
                    <div class="album-text">
                        <div class="title"><?php echo $album['title']; ?></div>
                        <div class="author"><?php echo $album['author']; ?></div>
                        <div class="year"><?php echo $album['year']; ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>

</body>
</html>
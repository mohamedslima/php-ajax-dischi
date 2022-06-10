<?php
require __DIR__ . "/../database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="header__container">
            <div class="header__logo_icon">LOGO SPOTIFY</div>
        </div>
    </header>
    <main>
        <div class="main_container">
            <div class="album_container">
                <?php foreach ($database as $album) { ?>
                    <div>
                        <div class="img_container">
                            <img src="<?php echo $album["poster"]; ?>" alt="">
                        </div>
                        <div class="text_container">
                            <h2><?php echo $album["title"]; ?></h2>
                            <p><?php echo $album["author"]; ?></p>
                            <p><?php echo $album["year"]; ?></p>
                            <p><?php echo $album["genre"]; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>
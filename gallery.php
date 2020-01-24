<?php

$id = isset($_GET['id']) ? $_GET['id'] : 0;
require 'includes/functions.php';
$page=0;
$photos = findPaged(6,$page*6);



?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf8">
    <title>Morgan Dawkins - Freelance Photograph - Gallery</title>
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display&display=swap" rel="stylesheet">
</head>
<body id="gallery">
    <header>
        <a href="index.php">
            <img src="css/logo.png" alt="Morgan Dawkins - Freelance Photograph">
        </a>
    </header>
    <main>
        <div id="hero">
            <h1>My greatest shots</h1>
        </div>
        <div class="container">
            <div id="pictures">


                        <?php 
                            foreach ($photos as $photo)
                        {
                            $src='images/medium/'.$photo['slug'];
                        ?>
                        <a href="detail.php?id=<?php echo $photo['id'] ?>" title="Picture 1">
                            <img src= "<?php echo $src; ?>">
                            <p><?php echo $photo['title'] ?></p>
                        </a>
                       <?php
                        }
                       ?>

            </div>
            <p id="pager">
                 <?php if ($id == 1){ //Desactiver le lien ?>
                    <a href="javascript:void(0)" class="btn disabled">
                    Previous shot
                    </a>

                <?php  } else { //Activer le lien ?>
                    <a href="gallery.php?id=<?php echo $page -1?>" class="btn">
                    Previous shot
                    </a>
                <?php } ?>

                <?php if ($id == 16){ //Desactiver le lien ?>
                    <a href="javascript:void(0)" class="btn disabled">
                    Next shot
                    </a>

                <?php  } else { //Activer le lien ?>
                    <a href="gallery.php?id=<?php echo $page +1 ?>" class="btn">
                    Next shot
                    </a>
                <?php } ?>
            </p>
        </div>
    </main>
    <footer>
        <div class="container">
            <ul>
                <li>
                    <a href="index.php" title="Photograph">Home</a>
                </li>
                <li>
                    <a href="gallery.php" title="My shots">Gallery</a>
                </li>
                <li>
                    <a href="contact.php" title="Contact form">Contact</a>
                </li>
            </ul>
        </div>
    </footer>
</body>
</html>

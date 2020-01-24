<?php
require 'includes/functions.php';


$id = isset($_GET['id']) ? $_GET['id'] : 0;
$photo = findOneById($id);

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf8">
    <title>Morgan Dawkins - Freelance Photograph - Shot</title>
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display&display=swap" rel="stylesheet">
</head>
<body id="detail">
    <header>
        <a href="index.php">
            <img src="css/logo.png" alt="Morgan Dawkins - Freelance Photograph">
        </a>
    </header>
    <main>
        <div id="hero">
            <!-- Picture title -->
            <h1><?php echo $photo['title'] ?></h1>
        </div>
        <div class="container">
            <figure>


                    <?php 
            
                            $src='images/large/'.$photo['slug'];

                     ?>
                        
                            <img src= "<?php echo $src; ?>">
            
                
                <!-- Picture date and location -->
                <figcaption><?php echo $photo['date']; echo $photo['location'] ?></figcaption>
            </figure>
            <!-- Picture description  -->
            <p><?php echo $photo['description'] ?></p>
            <p id="pager">
                    <?php if ($id == 1){ //Desactiver le lien ?>
                    <a href="javascript:void(0)" class="btn disabled">
                    Previous shot
                    </a>
                    
                <?php  } else { //Activer le lien ?>
                    <a href="detail.php?id=<?php echo $photo['id']-1 ?>" class="btn">
                    Previous shot
                    </a>
                <?php } ?>
                
                <?php if ($id == 16){ //Desactiver le lien ?>
                    <a href="javascript:void(0)" class="btn disabled">
                    Next shot
                    </a>
                    
                <?php  } else { //Activer le lien ?>
                    <a href="detail.php?id=<?php echo $photo['id']+1 ?>" class="btn">
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

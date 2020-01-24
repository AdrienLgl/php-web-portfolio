<?php
require 'includes/functions.php';

$id = isset($_GET['id']) ? $_GET['id'] : 0;
$id2 = isset($_GET['id']) ? $_GET['id'] : 0;


$galleryPictures = findPaged(6, 0);

if ($id>3){
    exit('Page Introuvable');
}


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
    <?php require 'includes/header.php' ?>
    <main>
        <div id="hero">
            <h1>My greatest shots</h1>
        </div>
        <div class="container">
            <div id="pictures">

            <?php foreach($galleryPictures as $galleryPicture){

                $galleryPicture['slug'];



           ?> 
                <a href="detail.php?id= <?php echo $galleryPicture['id'] ?>" title="Picture 1">
                    <img src="images/medium/<?php echo $galleryPicture['slug'] ?>.jpg" alt="Picture 1">
                    <br><?php echo $galleryPicture['title'] ?>
                </a> 

            <?php } ?>
               
            </div>
            <p id="pager">
            <a href="<?php if ($id > 1){

                $id = $id-1;
                echo 'gallery.php?id='.$id;

                }
                else{
                    echo 'javascript:void(0)';
                    $d = 'disabled';
                    
                }
                ?>" class="<?php echo 'btn'.' '.$d ?>">
                    Previous page
                </a>
                <a href="<?php 
                
                if ($id2 < 3){


                    $id2 = $id2+1;
                    echo 'gallery.php?id='.$id2;

                }
                    else{
                            echo 'javascript:void(0)';
                            $d2 = 'disabled';
    
                }

                ?>" class="<?php echo 'btn'.' '.$d2 ?>">
                    Next page
                </a>
            </p>
        </div>
    </main>
    <?php require 'includes/footer.php' ?>
</body>
</html>

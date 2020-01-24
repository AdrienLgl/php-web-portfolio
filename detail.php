<?php
require 'includes/functions.php';

$id = isset($_GET['id']) ? $_GET['id'] : 0;
$id2 = isset($_GET['id']) ? $_GET['id'] : 0;

$datas = findOneByID($id);

if ($datas == false){
    exit ('No image');
}

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
    <?php require 'includes/header.php' ?>
    <main>
        <div id="hero">
            <!-- Picture title -->
            <h1><?php echo $datas['title'] ?></h1>
        </div>
        <div class="container">
            <figure>
                <!-- Picture file (large) -->
                <img src="images/large/<?php echo $datas['slug'] ?>.jpg" alt="Image large file"/>
                <!-- Picture date and location -->
                <figcaption><?php echo $datas['date']?> - <?php echo $datas['location']?></figcaption>
            </figure>
            <!-- Picture description  -->
            <p><?php echo $datas['description']?></p>
            <p id="pager">
                <a href="
                
                <?php if ($id > 1){

                    $id = $id-1;
                    echo 'detail.php?id='.$id;
                    
                }
                    else{
                        echo 'javascript:void(0)';
                        $d = 'disabled';
                        
                    }
                    ?>
                    "class="<?php echo 'btn'.' '.$d ?>">
                    Previous shot  
                </a>
                <a href="<?php 
                
                if ($id2 < 16){


                    $id2 = $id2+1;
                    echo 'detail.php?id='.$id2;

                }
                    else{
                            echo 'javascript:void(0)';
                            $d2 = 'disabled';
    
                }

                ?>" class="<?php echo 'btn'.' '.$d2 ?>">
                                    Next shot
                                </a>
                            </p>
                        </div>
                    </main>
                    <?php require 'includes/footer.php' ?>
                </body>
                </html>

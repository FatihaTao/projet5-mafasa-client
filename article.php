<?php

include('connexion.php');
include('header.php');

$id="";

if(isset($_GET['id']) && is_numeric($_GET['id'])) {

    $id = $_GET['id'];

    $eachRecepie = $bdd->query("SELECT * FROM `recettes` WHERE `id`=$id");//on envoie la requete to get all info from DB as id=$id.
 //this means we are getting the data?
    $recepie = $eachRecepie->fetch();
    $text = nl2br($recepie['description']);
} 
 
?>

<section class="container fluid">
    <div class="card">
            <img src=<?php echo $recepie['image'];?> class="card-img-top" alt="Plat">
            <div class="card-body">
                <h2 class="card-title"><?php echo $recepie['title'];?></h2>
                <h4 class="card-subtitle mb-2 text-muted"><?php echo $recepie['category'];?></h4>
                <p class="card-text">Pour <?php echo $recepie['nbr_people'];?>personnes</p>
                <p class="card-text">Temps de préparation: <?php echo $recepie['prep_time'];?></p>
                <p class="card-text">Difficulté: <?php echo $recepie['level'];?></p>
                <p class="card-text"><?php echo $recepie['description'];?></p>
                <!-- <p class="card-text">"<?php echo $recepie['title'];?>"</p> -->
                <!-- <p class="card-text">"<?php echo $recepie['title'];?>"</p> -->
                <!-- <a href="article.php" class="btn btn-primary">Plus d'infos</a> -->
            </div>
    </div> 
     
</section>   

<?php
include('footer.php');
?>


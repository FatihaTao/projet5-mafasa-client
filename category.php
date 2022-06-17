<?php
include('connexion.php');
include('header.php');
//$sql="SELECT * FROM `recettes` WHERE `category`LIKE `Cuisine_égyptienne`";
//ORDER BY `recettes`.`category` ASC;
//SELECT * FROM `recettes` WHERE ORDER BY `category` DESC;
// $nom_categorie='';
// if(isset($_GET['category'])){
//     $nom_categorie = $_GET['category'];
// $sql=("SELECT * FROM `recettes` WHERE 1");
// if($nom_categorie != ""){
//     $sql .= "AND category like '".$nom_categorie."'";
// $reponse = $bdd->query($sql);
// } 

if(isset($_GET ['cat'])) {
    $nom_categorie = substr($_GET ['cat'], -5);
    $sql = "SELECT * FROM `recettes` WHERE category LIKE '%$nom_categorie%'";
    /*if ($_GET['cat'] == "Cuisine_égyptienne"){
        $sql .="AND category LIKE '".$_GET['cat']."'";
    } else{
        $sql = "SELECT * FROM `recettes`";
    }*/
$reponse = $bdd->query($sql);
?>
<div class="container-fluid">
  <?=' <div class="row row-col-3 card-deck">';?>
<?php
while($donnees = $reponse->fetch()){
    $textcard= substr($donnees['description'], 0,150);
//echo $donnees['category']. '<br />' ;
?>
            <div class="card overflow-auto overflow-hidden col-4">
              <img src="<?php echo $donnees['image'];?>" class="card-img-top" alt="Plat">
              <div class="card-body">
                <h2 class="card-title"><?php echo $donnees['title'];?></h2>
                <p class="card-text"><?php echo $textcard;?></p>
                <a href ="article.php?id=<?php echo $donnees['id'];?>" class="btn btn" name="submit">Plus d'infos</a>
              </div>
            </div>
            <?php
}
}
?>
</div>
</div>
<?php
include('footer.php')
?>









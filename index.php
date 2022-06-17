<?php
include ('connexion.php');
include ('header.php');
?>

<section>
  <div class="p-15 text-center bg-image" style="background-image: url('https://www.destinationperth.com.au/sites/default/files/styles/banner/public/simpleview-images/Kalamunda-Farmers-Market-Jumbotron_13B20ABC-5056-A36A-0CE57EFD081E0D62-13b209225056a36_13b20b0a-5056-a36a-0c0898d545189344.jpg?itok=yPrhhxFl'); height: 400px;>
      <div style="background-color: rgba(0, 0, 0, 0.6);>
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <h1 class="mb-3 m-3 p-4">Bienvenue chez Mafasa</h1>
            <h2 class="mb-3 p-3">Votre amie dans la cuisine</h2>
          
          </div>
        </div>
  </div>

<?php
//get top 5 recettes
$firstpage = $bdd->query("SELECT * FROM recettes ORDER BY 'publishdate' ASC LIMIT 5");


?>
<?='<div class="row row-cols-3 card-deck ">';?>

<?php
while($donnees = $firstpage->fetch()) {
    // $text = nl2br($donnees['description']);
    $textcard = substr($donnees['description'], 0, 150);
?>
                <div class="card overflow-auto overflow-hidden">
                    <img src="<?php echo $donnees['image'];?>" class="card-img-top" alt="Plat">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $donnees['title'];?></h2>
                        <p class="card-text"><?php echo $textcard;?></p>
                        <a href="article.php?id=<?php echo $donnees['id'];?>" class="btn btn color-C59D44">Plus d'infos</a>
                    </div>
                </div>    
<?php } ?>            

<?='</div>';?>
</section>
<?php
include('footer.php');

?>

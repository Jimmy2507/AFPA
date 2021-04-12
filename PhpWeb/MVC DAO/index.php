<?php


    function chargerClasse($classe)
    {
        if (file_exists("Php/Controller/" . $classe . ".class.php"))
        {
            require "Php/Controller/" . $classe . ".class.php";
        }

        if (file_exists("Php/Model/" . $classe . ".class.php"))
        {
            require "Php/Model/" . $classe . ".class.php";
        }

    }
spl_autoload_register("chargerClasse");

function AfficherPage(){
    require "./PHP/MODEL/ListeDonnees.php";
    include "PHP/VIEW/Head.php";
    include "PHP/VIEW/Header.php";
    include "PHP/VIEW/nav.php"; 
    include $tab["chemin"].$tab["page"."php"]
    include "PHP/VIEW/footer.php";
}


echo "<section id='contenu'>
    <div>";
    echo "liste des articles :" . '<br>';
$tableau = ProduitsManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}

echo "Ajout d'un produit".'<br>';
$pNew = new Produits(["libelleProduit"=>"stylo","prix"=>10,"dateDePeremption"=>"2020-12-13"]);
ProduitsManager::add($pNew);
echo "Nouvelle liste des articles :".'<br>';
$tableau = ProduitsManager::getList();
foreach ($tableau as $t){
    echo $t->toString().'<br>';
}
   echo" </div>
</section>";
include "PHP/VIEW/Footer.php";
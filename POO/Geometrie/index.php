<?php
function chargementClasse($class){
    require("./class/".$class.".class.php");
}
spl_autoload_register("chargementClasse");
//*****Rectangle*****//
$rectangle = new Rectangle(array("Longueur"=>5,"Largeur"=>10));
echo $rectangle->AfficherRectangle();
//*****Triangle*****//
$triangleRectangle = new TriangleRectangle(array("Base"=>10,"Hauteur"=>20));
echo $triangleRectangle->AfficherTriangle();
//*****Cercle*****//
$cercle = new Cercle(array("Diametre"=>5));
echo $cercle->AfficherCercle();
//*****Pave*****//
$pave = new Pave(array("Largeur"=>10,"Longueur"=>5,"Hauteur"=>8));
echo $pave->AfficherPave();
//*****Pyramide*****//
$pyramide = new Pyramide(array("Base"=>10,"Hauteur"=>15,"Haut"=>7));
echo $pyramide->AfficherPyramide();
//*****Sphere*****//
$sphere = new Sphere(array("Diametre"=>5));
echo $sphere->AfficherSphere();




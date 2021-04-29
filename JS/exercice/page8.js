var chiffre1 = prompt("Ecrire le premier chiffre :");
var chiffre2 = prompt("Ecrire le second chiffre :");
if((chiffre1 < 0 )||(chiffre2 <0) ){
    resultat = "Produit Negatif";
}else if(chiffre1 == 0 || chiffre2==0 ){
    resultat = "Produit nulle";
}else{
    resultat = "Positif";
}
console.log(resultat)
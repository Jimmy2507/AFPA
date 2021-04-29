var age = prompt("Age:");
var sexe = prompt("Sexe");
if ((sexe == "Homme")&& age >= 20){
    resultat = "Imposable";
}else if ((sexe = "Femme") && age >= 18 && age <=35 ){
    resultat = "Imposable";
}else{
    resultat = "Non imposable";
}
console.log(resultat);
var age = prompt("Age :");

if(age >= 6 && age <= 7){
    resultat = "poussin";
}else if (age >= 8 && age <= 9){
    resultat = "Pupille";
}else if (age >= 10 && age <= 11){
    resultat = "Minime";
}else if (age >=12){
    resultat = "Cadet";
}
console.log(resultat);
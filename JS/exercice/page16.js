compteur10 = 0
compteur5 = 0
compteur1 = 0
sommes = 0
do {
   prix = parseInt(prompt("Ecrire le prix de l'article"))
   sommes = sommes + prix
} while (prix != 0);
window.alert("Le prix a payer est de : "+sommes)

argent =  parseInt(prompt("Entrer l'argent :"))

while (argent<prix) {
    window.alert("Sommes inferieur à la sommes demandez, ré essayer")
    argent =  parseInt(prompt("Entrer l'argent :"))
}
reste = argent - sommes

while (reste>=10) {
    reste = reste -10
    compteur10 = compteur10+1
}
while (reste <=10 && reste >=  5) {
    reste = reste - 5 
    compteur5 = compteur5 +1
}
while (reste !=0) {
    reste = reste -1
    compteur1 = compteur1 +1    
}

window.alert("Sommes payer : "+ argent)
window.alert("nombre de billets de 10 :"+ compteur10 + "billets de 5 : "+compteur5+ "piece de 1 : "+compteur1)
var titre = document.getElementsByClassName("Titre")

var parag = document.getElementsByClassName("para")

for (let i = 0; i < titre.length; i++) {
    titre[i].addEventListener("click",changerCouleurTitre);
}    

function changerCouleurTitre(){
    couleur="jaune"
    for (let i = 0; i < titre.length; i++) {
        
            if(couleur == "jaune"){
                titre[i].setAttribute("style", "color:green"); 
                couleur = "vert"
            }else if (couleur == "vert"){
                titre[i].setAttribute("style", "color:red");
                couleur = "rouge"
            }else if(couleur == "red"){
                titre[i].setAttribute("style", "color:yellow");
                couleur = "jaune"
            }
        
    }
}

function changerCouleur(){

}


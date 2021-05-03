function fermerParent(){
    window.opener.close()
}
function fermer(){
    self.close()
}

var fermerParents = document.getElementById("button4");
fermerParents.addEventListener("click",fermerParent);

var fermerMoi = document.getElementById("button5");
fermerMoi.addEventListener("click",fermer);
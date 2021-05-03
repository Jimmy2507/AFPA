function new_window(){
	popup=open('popup.html', 'new', 'width=800 , height=500, top=300, left=400');
}

function deplace(){		
    popup.focus();
    popup.moveBy(50,0) ;				
}
function reduit(){		
    var large = (popup.document.body.offsetWidth / 8)*4;
    var hauteur = (popup.document.body.offsetHeight / 8)*4;
    popup.resizeTo(large,hauteur) ;
    popup.focus();
}

function fermer(){
    popup.close()
}
    var popup = document.getElementById("image");
    popup.addEventListener("click",new_window);

    var fermerFenetre = document.getElementById("button1");
    fermerFenetre.addEventListener("click",fermer);

    var deplacee = document.getElementById("button2");
    deplacee.addEventListener("click",deplace);

    var reduits = document.getElementById("button3");
    reduits.addEventListener("click",reduit);
  








function new_window()
	{
		nouvelleFenetre=open('popup.html', 'new', 'width=800 , height=500, top=300, left=400');
	 }

function deplace()
	{		
		nouvelleFenetre.focus();
		nouvelleFenetre.moveBy(50,0) ;				
	}
function reduit()
	{		
		var large = (nouvelleFenetre.document.body.offsetWidth / 8)*4;
		var hauteur = (nouvelleFenetre.document.body.offsetHeight / 8)*4;
		nouvelleFenetre.resizeTo(large,hauteur) ;
		nouvelleFenetre.focus();
	}
function fermerParent(){
    window.opener.close()
}
function fermer(){
    self.close()
}

var nouvelleFenetre = document.getElementById("image");
nouvelleFenetre.addEventListener("click",new_window);

var fermerFenetre = document.getElementById("button1");
fermerFenetre.addEventListener("click",fermer);

var deplacee = document.getElementById("button2");
deplacee.addEventListener("click",deplace);

var reduits = document.getElementById("button3");
reduits.addEventListener("click",reduit);

var fermerParents = document.getElementById("button4");
fermerParents.addEventListener("click",fermerParent);

var fermerMoi = document.getElementById("button5");
fermerMoi.addEventListener("click",fermer);



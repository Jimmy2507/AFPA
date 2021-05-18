nbColonne=30;
nbLigne=20;
cote=20;
score=document.getElementById("score");
dessin=document.getElementById("dessin");
ctx=dessin.getContext("2d");
listeBouttonsCouleur = document.getElementsByClassName("couleur");
listeBouttonsDifficulte = document.getElementsByClassName("Difficulte");
//CHANGEMENT COULEUR
for (let i = 0; i < listeBouttonsCouleur.length; i++) {
	listeBouttonsCouleur[i].addEventListener("click",function(){
        couleurSnake(i);
    })
}

//CHANGEMENT DIFFICULTE

//***************************************************************CA VA PAS***********************************************************//
for (let i = 0; i < listeBouttonsDifficulte.length; i++) {
	listeBouttonsDifficulte[i].addEventListener("click",function(){
		switch (i) {
			case 0:	
			
				speed = 150;
				break;
			case 1:
				
				speed = 100;
				break;
			case 2:
				
				speed = 50;
				break;
		}
		if(timerJeu != undefined){
			clearInterval(timerJeu)
		}
		
	timerJeu=setInterval(boucleJeu,speed);	

    })
}
//**************************************************************************************************************************************** */
snake=[[1,0]];//TAILLE DU SERPENT
snakeIncX=1;
snakeIncY=0;
dessin.width=nbColonne*cote;
dessin.height=nbLigne*cote;

placeBonbon();
couleurSnake();

window.onkeydown = function(e) {
    key = e.keyCode;
	switch(key){
		case 37 : //Gauche
			if(snakeIncX==0){
				snakeIncX=-1;
				snakeIncY=0
			}
			break;	
    	case 38 : //Haut
			if(snakeIncY==0){
				snakeIncX=0;
				snakeIncY=-1
			}
			break;	
    	case 39: //Droite
			if(snakeIncX==0){
				snakeIncX=1;
				snakeIncY=0
			}
			break;
    	case 40: //Bas
			if(snakeIncY==0){
				snakeIncX=0;
				snakeIncY=1;
			}
			break;
		case 27:
			//Echap
			alert("Pause")
			break;
	}
}
function couleurSnake(numBtn){
	if (numBtn == 0) {
		ctx.fillStyle="red";
	}else if(numBtn == 1){
		ctx.fillStyle="blue";
	}else if(numBtn == 2){
		ctx.fillStyle="green";
	}else if (numBtn == 3){
		
	}else{
		ctx.fillStyle="yellow";
	}
}

function majDessin(){
	ctx.clearRect(0,0,dessin.width,dessin.height); //ON SUPPRIME TOUT LE CANVAS
	for(i=0,l=snake.length;i<l;i++){ 				//BOUCLE POUR AFFICHER TOUT LES ELEMENT DU SERPENT
		ctx.fillRect(snake[i][0]*cote,snake[i][1]*cote,cote,cote);
	}
	//AFFICHAGE BONBON
	ctx.fillRect(bonbon[0]*cote,bonbon[1]*cote,cote,cote);	
}

function majScore(point){
	score.innerHTML=point;
}

function perdu(){
	clearInterval(timerJeu);
	alert("Perdu !");
	location.reload();
}

function boucleJeu(){
	if(bougeSnake()){
		majDessin();
	}else{
		perdu();
	}
}

function placeBonbon(){
	bonbon=[1+Math.floor((nbColonne-2)*Math.random()),1+Math.floor((nbLigne-2)*Math.random())];
}

function bougeSnake(){

	tete=[snake[0][0]+snakeIncX,snake[0][1]+snakeIncY];
	//SI SNAKE SE PREND LE MUR
    if((tete[0]==-1||tete[0]==nbColonne)||(tete[1]==-1||tete[1]==nbLigne)){
        return false;
    } 
	//SI SNAKE TOUCHE SON COROP
    for(i=0,l=snake.length-1;i<l;i++){ //BOUCLE POUR PARCOURIR TOUT LES ELEMENT DU CORP ET COMPARE A LA NOUVELLE POSITION DE LA TETE
		if((tete[0]==snake[i][0])&&(tete[1]==snake[i][1])){
           return false; 
        } 
	}
	//SI LA TETE TOUCHE UN BONBON
    if((tete[0]==bonbon[0])&&(tete[1]==bonbon[1])){
		placeBonbon();
		majScore(snake.length);

	}else{
		snake.pop();
	}		
		snake.unshift(tete);
		return true;
	//REMPLACE LA TETE PAR UN NOUVELLE ELEMENT

}
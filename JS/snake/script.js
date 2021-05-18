nbColonne=30;
nbLigne=20;
cote=20;
score=document.getElementById("score");
dessin=document.getElementById("dessin");
ctx=dessin.getContext("2d");
listeBouttons = document.getElementsByTagName("button");
for (let i = 0; i < listeBouttons.length; i++) {
	listeBouttons[i].addEventListener("click",function(){
        couleurSnake(i);
    })
}

snake=[[1,0]];
snakeIncX=1;
snakeIncY=0;
dessin.width=nbColonne*cote;
dessin.height=nbLigne*cote;
timerJeu=setInterval(boucleJeu,100);
placeBonbon();
couleurSnake();
alert("Appuie sur ok pour commencer ! ")
window.onkeydown = function(e) {
    key = e.keyCode;
	switch(key){
		case 37: //Gauche
			if(snakeIncX==0){
				snakeIncX=-1;
				snakeIncY=0
			}
		break;	
    	case 38: //Haut
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
	}else{
		ctx.fillStyle="green";
	}
}

function majDessin(){
	ctx.clearRect(0,0,dessin.width,dessin.height);
	for(i=0,l=snake.length;i<l;i++){
		ctx.fillRect(snake[i][0]*cote,snake[i][1]*cote,cote,cote);
	}
	ctx.fillRect(bonbon[0]*cote,bonbon[1]*cote,cote,cote);	
}

function majScore(s){
	score.innerHTML=s;
}

function finPartie(){
	clearInterval(timerJeu);
	alert("Perdu !");
	location.reload();
}

function boucleJeu(){
	if(bougeSnake()){
		majDessin();
	}else{
		finPartie();
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



//alert(window.innerHeight+" "+window.innerWidth)
//TOUCHE CLAVIER
window.onkeydown = function(e) {
    var key = e.keyCode;
    switch (key) {
        case 37:
            //-Gauche
            sens = "gauche"
            break;
        case 39:
            //-Droit
            sens = "droite"
            break;
        case 38:
            //-Haut
            sens = "haut"
            break;
        case 40:
            //-Bas
            sens = "bas"
            break;
        default:
            break;
        }
        avancer(sens)
};

//  BOUTTONS
var boutton = document.getElementsByTagName("button");
    for (let i = 0; i < boutton.length; i++) {
        boutton[i].addEventListener("click",function(){
            switch (i) {
                case 1:
                    sens = "haut";
                    break;
                case 2:
                    sens = "bas";
                    break;
                case 0:
                    sens = "gauche"
                    break;
                case 3 :
                    sens = "droite"
                    break;
                default:
                    break;
            }
            avancer(sens)
        });
    }

carre = document.querySelector("#carre")

//Bouger avec la souris
var ecartY, ecartX; // repère le décalage entre le coin suprieur du carré et la souris
var carre = document.getElementById('carre');
var flagMouv = false;
var compteurCollision = 0;

carre.addEventListener("mousedown", (e) => {
    // on repere l'ecart entre la souris et le haut du carré, pourgarder cet ecart pendant le déplacement
    ecartY = parseInt(window.getComputedStyle(carre).top) - parseInt(e.clientY);
    ecartX = parseInt(window.getComputedStyle(carre).left) - parseInt(e.clientX);
    // on autorise le déplacement
    flagMouv = true;
});

document.addEventListener("mousemove", (e) => {
    // on déplace si le mouvement est autorisé
    if (flagMouv == true) {
        deplaceSouris(e);
    }
});

carre.addEventListener("mouseup", (e) => {
    //on interdit le deplacement
    flagMouv = false;
});



//METHODE POUR BOUGER
function avancer(sens){

        switch (sens){
            case "droite" :
                deplace(5, 0);
                break;
            case "gauche":
                deplace(-5, 0);
                break;
            case "haut":
                deplace(0, -5);
                break;
            case "bas":
                deplace(0, 5);                 
                break;     
        }        
    
}

//METHODE BOUGER A LA SOURIS
function deplaceSouris(e) {
    if (!collisionObstacles(parseInt(e.clientY) + ecartY, parseInt(e.clientX) + ecartX)) {
        carre.style.top = parseInt(e.clientY) + ecartY + "px";
        carre.style.left = parseInt(e.clientX) + ecartX + "px";
    }
};

//Valider Deplacement
function deplace(dx, dy) {
    var deplacement_ok = true;
    var stylecarre = window.getComputedStyle(document.getElementById('carre'), null);
    var t = parseInt(stylecarre.top);
    var l = parseInt(stylecarre.left);
    var w = parseInt(stylecarre.width);
    var h = parseInt(stylecarre.height);
    var listeObs = document.querySelectorAll('.obstacle');
    listeObs.forEach(function (elt) {
        var styleObst = window.getComputedStyle(elt, null);
        var tob = parseInt(styleObst.top);
        var lob = parseInt(styleObst.left);
        var wob = parseInt(styleObst.width);
        var hob = parseInt(styleObst.height);
        if (!depl_ok(tob, lob, wob, hob, t + dy, l + dx, w, h)) {
            if(styleObst.backgroundColor=="rgb(0, 0, 0)"){
                alert("Perdu");
                window.location.reload();    
            }else if (styleObst.backgroundColor=="rgb(0, 128, 0)"){
                document.getElementById('carre').style.top =  200+"px";
                document.getElementById('carre').style.left = 1390 + 'px';
                
            }else if (styleObst.backgroundColor=="rgb(255, 255, 255)"){
                leverMur()
            }else if(styleObst.backgroundColor=="rgb(166, 43, 43)"){
                alert("La porte est fermé ! Appuie sur le boutton pour l'ouvrir !")
            }else if (styleObst.backgroundColor=="rgb(114, 112, 112)"){
                alert("Bravo vous avez trouvé le chemin jusqu'au tresor !")
            }

        }
        deplacement_ok = deplacement_ok && depl_ok(tob, lob, wob, hob, t + dy, l + dx, w, h);

    });
    if (deplacement_ok) {
        document.getElementById('carre').style.top = t + dy + 'px';
        document.getElementById('carre').style.left = l + dx + 'px';
    }
}

function collisionUnObstacle(obstacle, posX, posY) {
    var styleObjet = window.getComputedStyle(carre);
    var w = parseInt(styleObjet.width);
    var h = parseInt(styleObjet.height);
    var styleObstacle = window.getComputedStyle(obstacle);
    var tob = parseInt(styleObstacle.top);
    var lob = parseInt(styleObstacle.left);
    var wob = parseInt(styleObstacle.width);
    var hob = parseInt(styleObstacle.height);
    if (posY < lob + wob && posY + w > lob && posX < tob + hob && posX + h > tob) {
        flagMouv = false;
        alert("Perdu");
        window.location.reload();
        return true;
    }
    return false;
}

function collisionObstacles(posX, posY) {
    var pasCollision = true;
    var listeObstacles = document.querySelectorAll('.obstacle');
    listeObstacles.forEach(function (obstacle) {
        pasCollision = pasCollision && !collisionUnObstacle(obstacle, posX, posY);
    });
    return !pasCollision;
}

function depl_ok(tob, lob, wob, hob, t, l, w, h) {
    if (l < lob + wob && l + w > lob && t < tob + hob && t + h > tob) {
        return false
    }
    return true;
}

function leverMur(){
    
    document.getElementById('porte').style.top =  224+"px";  
}

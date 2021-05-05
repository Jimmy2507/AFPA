//alert(window.innerHeight+" "+window.innerWidth)
//TOUCHE CLAVIER
window.onkeydown = function(e) {
    var key = e.keyCode;
    switch (key) {
        case 37:
            //-Gauche
            sens = "gauche"
            avancer(sens)
            break;
        case 39:
            //-Droit
            sens = "droite"
            avancer(sens)
            break;
        case 38:
            //-Haut
            sens = "haut"
            avancer(sens)
            break;
        case 40:
            //-Bas
            sens = "bas"
            avancer(sens)
            break;
        default:
            break;
        }
};

//  BOUTTONS
var boutton = document.getElementsByTagName("button");
    for (let i = 0; i < boutton.length; i++) {
        boutton[i].addEventListener("click",function(){
            switch (i) {
                case 1:
                    sens = "haut";
                    avancer(sens)
                    break;
                case 2:
                    sens = "bas";
                    avancer(sens)
                    break;
                case 0:
                    sens = "gauche"
                    avancer(sens)
                    break;
                case 3 :
                    sens = "droite"
                    avancer(sens)
                    break;
                default:
                    break;
            }
        });
    }
dep=10,leftPos=270;topPos=150;
carre = document.querySelector("#carre")

//Bouger avec la souris

// window.addEventListener("mousemove",souris);

// function souris(event){
//     carre.style.top = event.y+"px";
//     carre.style.left = event.x+"px";
// }

//METHODE POUR BOUGER
function avancer(sens){
    if(depl_ok){
        switch (sens){
            case "droite" :
                if(leftPos <(window.innerWidth-40)){
                    leftPos+=dep
                    carre.style.left=leftPos+"px"                
                }
                break;
            case "gauche":
                if(leftPos >10){
                    leftPos-=dep
                    carre.style.left=leftPos+"px" 
                }
                break;
            case "haut":
                if(topPos>125){
                    topPos-=dep
                    carre.style.top=topPos+"px"                
                }
                break;
            case "bas":
                if(topPos<(window.innerHeight-40)){
                    topPos+=dep
                    carre.style.top=topPos+"px"                 
                }
                break;     
        }        
    }

}
//Valider Deplacement
var listeObs = document.querySelectorAll('.obstacle');
listeObs.forEach(function (elt) {
    var styleObst = window.getComputedStyle(elt, null);
    var tob = parseInt(styleObst.top);
    var lob = parseInt(styleObst.left);
    var wob = parseInt(styleObst.width);
    var hob = parseInt(styleObst.height);
    
    deplacement_ok = deplacement_ok && depl_ok(tob, lob, wob, hob, t + dy, l + dx, w, h);
});

function depl_ok(tob, lob, wob, hob, t, l, w, h) {
    if (l < lob + wob && l + w > lob && t < tob + hob && t + h > tob) {
        return false
    }
    return true;
}


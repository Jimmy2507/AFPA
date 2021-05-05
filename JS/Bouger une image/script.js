window.onkeydown = function(e) {
    var key = e.keyCode || e.which;
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
dep=10,leftPos=0;topPos=100;

var xMousePos = 0;
var yMousePos = 0;
carre = document.querySelector("#c1")
window.onmousemove = function(e)
{
    xMousePos = e.clientX + window.pageXOffset;
    yMousePos = e.clientY + window.pageYOffset;
        window.onmouseover = function(){
            //alert("Position de la souris en Y : "+yMousePos+", position de la souris en X : "+xMousePos)
            leftPos=xMousePos;
            topPos=yMousePos;
            carre.style.left=xMousePos+"px";
            carre.style.top=yMousePos+"px";
        }
};


function avancer(sens){
    switch (sens){
        case "droite":
            leftPos+=dep
            carre.style.left=leftPos+"px" 
            break;
        case "gauche":
            leftPos-=dep
            carre.style.left=leftPos+"px" 
            break;
        case "haut":
            topPos-=dep
            carre.style.top=topPos+"px" 
            break;
        case "bas":
            topPos+=dep
            carre.style.top=topPos+"px" 
            break;     
    }

}
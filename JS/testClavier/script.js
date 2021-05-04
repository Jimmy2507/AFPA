var TouchKeyDown = 0
var TouchKeyPress = 0
var TouchKeyUp = 0
var Touche = ""
function func_KeyDown(event){
TouchKeyDown = (window.Event) ? event.which : event.keyDown;
}
function func_KeyPress(event){
TouchKeyPress = (window.Event) ? event.which : event.keyPress;
Touche = String.fromCharCode(TouchKeyPress)
}
function func_KeyUp(event){
TouchKeyUp = (window.Event) ? event.which : event.keyDown;
if (TouchKeyPress > 0) {
switch(TouchKeyDown) {
case 13: Touche = "Entrée" ; break
case 8: Touche = "Retour arrière" ; break
case 32: Touche = "Espace" ; break
} 
alert("Le code de la touche " + Touche + " est : Keydown : " + TouchKeyDown + " KeyPress : " + TouchKeyPress + " KeyUp : " + TouchKeyUp)
}
else{
switch(TouchKeyDown) {
case 17: Touche = "Ctrl" ; break
case 91: Touche = "Démarrage" ; break
case 18: Touche = "Alt" ; break
case 93: Touche = "Menu" ; break
case 40: Touche = "Flèche du bas" ; break
case 39: Touche = "Flèche de droite" ; break
case 38: Touche = "Fléche du haut" ; break
case 37: Touche = "Fléche de gauche" ; break
case 16: Touche = "Schift" ; break
case 20: Touche = "Majuscule" ; break
case 45: Touche = "Inser" ; break
case 46: Touche = "Suppr" ; break
case 36: Touche = "Flèche de travers" ; break
case 35: Touche = "Fin" ; break
case 33: Touche = "Haut rapide" ; break
case 34: Touche = "Bas rapide" ; break
case 27: Touche = "Echap" ; break
case 112: Touche = "F1" ; break
case 113: Touche = "F2" ; break
case 114: Touche = "F3" ; break
case 115: Touche = "F4" ; break
case 116: Touche = "F5" ; break
case 117: Touche = "F6" ; break
case 118: Touche = "F7" ; break
case 119: Touche = "F8" ; break
case 120: Touche = "F9" ; break
case 121: Touche = "F10" ; break
case 122: Touche = "F11" ; break
case 123: Touche = "F12" ; break
case 145: Touche = "Arrêt défil" ; break
case 19: Touche = "Pause Attn" ; break
default:
alert("Votre touche est inconnu.")
}
if (TouchKeyDown > 0){
alert("Le code KeyDown de la touche " + Touche + " est " + TouchKeyDown + ".")
}
}
TouchKeyDown = 0
TouchKeyPress = 0
TouchKeyUp = 0
Touche = ""
}
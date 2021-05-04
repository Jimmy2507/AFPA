// var TouchKeyDown = 0
// var TouchKeyPress = 0
// var TouchKeyUp = 0

// function func_KeyDown(event){
// TouchKeyDown = (window.Event) ? event.which : event.keyDown;
// }

// function func_KeyPress(event){
// TouchKeyPress = (window.Event) ? event.which : event.keyPress;
// Touche = String.fromCharCode(TouchKeyPress)
// }

// function func_KeyUp(event){
//     TouchKeyUp = (window.Event) ? event.which : event.keyDown;
//     if (TouchKeyDown == 107) {
//         ajoutDessert()
//     }
// }

var ajt = document.querySelector("button");
ajt.addEventListener("click", ajoutDessert);

function suppDessert(e){
    listeClick = e.target;
    parent = listeClick.parentNode; 
    parent.removeChild(listeClick);   
}

function ajoutDessert (){
    var nvElement = document.createElement("li");
    nvElement.textContent = prompt("Saisir le dessert");
    
    if(nvElement.textContent != ""){
        nvElement.addEventListener("click",suppDessert);
        document.getElementById("dessert").appendChild(nvElement);    
    }
}


window.onkeydown = function(e) {
    var key = e.keyCode || e.which;
    if (key == 107) {
        ajoutDessert()
    }
}
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


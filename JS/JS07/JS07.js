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
    nvElement.addEventListener("click",suppDessert);
    document.getElementById("dessert").appendChild(nvElement);
}


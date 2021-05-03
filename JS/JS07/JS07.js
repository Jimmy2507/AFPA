function suppDessert(e){
    listeClick = e.target;
    parent = listeClick.parentNode; 
    parent.removeChild(listeClick);   
}
function ajoutDessert (){
    var newElement = document.createElement("li");
    newElement.textContent = prompt("Saisir le dessert");
    newElement.addEventListener("click",  suppDessert );
    document.getElementById("dessert").appendChild(newElement);
}
var ajt = document.querySelector("button");
ajt.addEventListener("click", ajoutDessert);

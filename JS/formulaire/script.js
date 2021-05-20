input = document.getElementsByTagName("input");
oeil = document.querySelector("#oeil");
oeilBarre = document.querySelector("#oeilBarre");
oeil.addEventListener("mousedown",afficheMdp);
oeilBarre.addEventListener("mousedown",Mdp);
for (let i = 0; i < input.length; i++) {
    input[i].addEventListener("input",function(){
        verifInput(i);
    });
}

function verifInput(i){ 
    if(input[i].checkValidity()){
        input[i].style.color="green";
    }else{
        input[i].style.color="red";
    }   
}

function afficheMdp(){
    var mdp = document.querySelector("#Mdp");
    mdp.setAttribute("type","text")
    oeil.style.display = "none"
    oeilBarre.style.display = "flex"
}

function Mdp(){
    var mdp = document.querySelector("#Mdp");
    mdp.setAttribute("type","password")
    oeil.style.display = "flex"
    oeilBarre.style.display = "none"
}
input = document.getElementsByTagName("input");
oeil = document.querySelector("#oeil");
oeilBarre = document.querySelector("#oeilBarre");
valid = document.querySelector("#valid");
oeil.addEventListener("mousedown",afficheMdp);
oeilBarre.addEventListener("mousedown",Mdp);
verif = []

for (let i = 0; i < input.length; i++) {
    input[i].addEventListener("input",function(){
        verifInput(i);
        verification();  
    });
}

function verifInput(i){ 
    if(input[i].checkValidity()&&input[i].value!=""){
        input[i].style.color="green";
        input[i].style.borderColor="green"
    }else if(!input[i].checkValidity()&&input[i].value!=""){
        input[i].style.color="red";
        input[i].style.borderColor="red"
    }else{
        input[i].style.borderColor=""
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

function verification(){
    for (let i = 0; i < input.length; i++) {
        if(input[i].checkValidity()&& input[i].value !=""){
            verif[i]=true
        }else{
            verif[i]=false
        }
    }

    if(!verif.includes(false)){
        valid.disabled = false;
    }else{
        valid.disabled = true;
    }
}

input = document.getElementsByTagName("input");
oeil = document.querySelector("#oeil");
valid = document.querySelector("#valid");
clear = document.querySelector("#Reload");
mdp = document.querySelector("#Mdp");
message = document.querySelector(".message");
msg2= document.getElementsByClassName("msg");
confirmMdp = document.querySelector("#ConfirmMdp");
oeil2 = document.querySelector("#oeil2");

//AFFICHE MDP
oeil.addEventListener("mousedown",function(){
    mdp.setAttribute("type","text")
    oeil.style.display = "none"
    oeilBarre.style.display = "flex"
});
document.addEventListener("mouseup",function(){
    mdp.setAttribute("type","password")
    oeil.style.display = "flex"
    oeilBarre.style.display = "none"
})
//AFFICHER CONFIRMATION
oeil2.addEventListener("mousedown",function(){
    confirmMdp.setAttribute("type","text")
    oeil2.style.display = "none"
    oeilBarre2.style.display = "flex"
});
document.addEventListener("mouseup",function(){
    confirmMdp.setAttribute("type","password")
    oeil2.style.display = "flex"
    oeilBarre2.style.display = "none"
})

clear.addEventListener("click",reload);
mdp.addEventListener("contextmenu", annule);
confirmMdp.addEventListener("contextmenu",annule);
confirmMdp.addEventListener("paste",annule);

verif = []

for (let i = 0; i < input.length; i++) {
    input[i].addEventListener("input",function(){
        verifInput(i);
        verification();  
    });
}

confirmMdp.addEventListener("input",function(){
    if(confirmMdp.value== mdp.value){
        confirmMdp.style.borderColor="#81c0fc"
    }else if (confirmMdp.value!= mdp.value){
        confirmMdp.style.borderColor="#fb485e"
    }else{
        confirmMdp.style.borderColor=""
    }
})

function reload(){
    for (let i = 0; i < input.length; i++) {
        input[i].value=""
        input[i].style.borderColor=""
        msg2[i].innerHTML=""
        valid.disabled = true;
        msg2[i].style.opacity = "0"
        message.innerHTML = " "
    }
}

function verifInput(i){ 
    nom = input[i].name
    if(input[i].checkValidity()&& input[i].value!=""){
        input[i].style.borderColor="#81c0fc"
        msg2[i].innerHTML = "Champs valide."
        msg2[i].style.opacity = "100"
    }else if(!input[i].checkValidity()&& input[i].value!=""){
        input[i].style.borderColor="#fb485e"
        message.innerHTML = nom+" est incorrect"
        msg2[i].innerHTML = "Champs invalide."
        msg2[i].style.opacity = "100"
    }else{
        input[i].style.borderColor=""
        message.innerHTML = " "
        msg2[i].innerHTML = "Champs requis!" 
        
        
    }
}

function verification(){
    for (let i = 0; i < input.length; i++) {
        if(input[i].checkValidity() && input[i].value !=""){
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

function annule(){
    event.preventDefault();
    return false;
}
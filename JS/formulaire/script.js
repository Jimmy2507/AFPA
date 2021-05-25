input = document.getElementsByTagName("input");
oeil = document.querySelector("#oeil");
oeilBarre = document.querySelector("#oeilBarre");
valid = document.querySelector("#valid");
clear = document.querySelector("#Reload");
mdp = document.querySelector("#Mdp");
message = document.querySelector(".message")
confirmMdp = document.querySelector("#ConfirmMdp");
confirmMdp.addEventListener("input",verifMdp);
clear.addEventListener("click",reload);
verif = []
for (let i = 0; i < input.length; i++) {
    input[i].addEventListener("input",function(){
        verifInput(i);
        verification();  
    });
}
oeil.addEventListener("click",afficheMdp);
oeilBarre.addEventListener("click",Mdp);
function reload(){
    for (let i = 0; i < input.length; i++) {
        input[i].value=""
        input[i].style.borderColor=""
        valid.disabled = true;
    }
}

function verifInput(i){ 
    if(input[i].checkValidity()&& input[i].value!=""){
        input[i].style.borderColor="#81c0fc"
    }else if(!input[i].checkValidity()&& input[i].value!=""){
        input[i].style.borderColor="#fb485e"
    }else{
        input[i].style.borderColor=""
    }
}

function afficheMdp(){
    mdp.setAttribute("type","text")
    oeil.style.display = "none"
    oeilBarre.style.display = "flex"
}

function Mdp(){
    mdp.setAttribute("type","password")
    oeil.style.display = "flex"
    oeilBarre.style.display = "none"
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
function verifMdp(){
    if(confirmMdp === mdp && confirmMdp!=""){
        mdp.style.borderColor="#81c0fc";
        confirmMdp.style.borderColor="#81c0fc";
    }else if (confirmMdp!= mdp && confirmMdp!=""){
        mdp.style.borderColor="#fb485e";
        confirmMdp.style.borderColor="#fb485e";
    }else{
        mdp.style.borderColor="";
        confirmMdp.style.borderColor="";
    }
}
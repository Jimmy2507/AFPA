var role = document.querySelector("#Role");
role.addEventListener("change",function(){
    requ.open('GET', 'index.php?page=listeAPI', true);
    requ.send(null);
})

contenu = document.querySelector("#Contenu");
var repAPI;
const requ = new XMLHttpRequest();
    requ.onreadystatechange = function(event) {
        // XMLHttpRequest.DONE === 4
        if (this.readyState === XMLHttpRequest.DONE) {
            if (this.status === 200) {
                var divCount  = document.getElementsByClassName("compter");
                reponse=JSON.parse(this.responseText);
                console.log(reponse);
                contenu.innerHTML = ""
                for (let i = 0; i < reponse.length; i++) {
                    if(role.value==reponse[i].idRole){
                        repAPI = reponse[i].username;
                        ligne = document.createElement("div");
                        ligne.setAttribute("class","Ligne");
                        ligne.id=i;
                        userName = document.createElement("div")
                        userName.setAttribute("class","userName")
                        ligne.appendChild(userName);
                        contenu.appendChild(ligne)
                        userName.innerHTML = repAPI;                        
                    }
                }
            }else{
                console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
            }
        }
    }    


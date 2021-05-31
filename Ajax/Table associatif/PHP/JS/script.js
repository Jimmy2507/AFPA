var formateur = document.querySelector("#Formateur");
var stagiaire = document.querySelector("#Stagiaire");
var offre = document.querySelector("#Offre");
var annee = document.querySelector("#Annee");

formateur.addEventListener("change",function(){
    requ.open('GET', 'index.php?page=listeAPI', true);
    requ.send(null);
})

const requ = new XMLHttpRequest();
    requ.onreadystatechange = function(event) {
        // XMLHttpRequest.DONE === 4
        if (this.readyState === XMLHttpRequest.DONE) {
            if (this.status === 200) {
                reponse=JSON.parse(this.responseText);
                console.log(reponse);
                for (let i = 0; i < reponse.length; i++) {
                    
                    
                }
            }
        }
    }
    
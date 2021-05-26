contenu = document.querySelector("#Contenu");
var repAPI;
const req = new XMLHttpRequest();

req.open('GET','https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=parkings-gratuits&q=&facet=nom_du_parking&facet=nombre_de_place&facet=adresse');
req.send(null);

req.onreadystatechange = function(e){
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            reponse = JSON.parse(this.responseText);
            console.log(this.responseText);
            console.log(reponse);
            repAPI = reponse.records;
            for (let i = 0; i < repAPI.length; i++) {
                ligne = document.createElement("div");
                ligne.setAttribute("class","Ligne");
                ligne.id=i;
                nom = document.createElement("div")
                nom.setAttribute("class","nom Centre")
                ligne.appendChild(nom);
                nbPlace = document.createElement("div")
                nbPlace.setAttribute("class","nbPlace Centre")
                ligne.appendChild(nbPlace);
                adresse = document.createElement("div")
                adresse.setAttribute("class","adresse Centre")
                ligne.appendChild(adresse);
                contenu.appendChild(ligne);
                espace = document.createElement("div");
                espace.setAttribute("class","EspaceH");
                contenu.appendChild(espace);
                
                nom.innerHTML = repAPI[i].fields.nom_du_parking;
                nbPlace.innerHTML = repAPI[i].fields.nombre_de_place;
                adresse.innerHTML = repAPI[i].fields.adresse;
                
            }
            console.log("Réponse reçue: %s", this.responseText);
        }else{
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
}
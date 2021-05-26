contenu = document.querySelector("#Contenu");
boutton = document.querySelector("#boutton");
modifVille = document.querySelector('#changerVille')
ville = "Dunkerque"
meteo(ville)
boutton.addEventListener("click",function(){
    ville = modifVille.value
    meteo(ville)
})

function meteo(ville){
    const req = new XMLHttpRequest();
    req.open('GET','https://api.openweathermap.org/data/2.5/weather?q='+ville+'&appid=186b5262629c1297fa3ba8c948b0224a&units=metric&lang=fr',true);
    req.send();
    req.onload = function(){
        if(this.readyState===XMLHttpRequest.DONE){
            if(this.status===200){
                reponse = JSON.parse(this.responseText);
                console.log(this.responseText);
                console.log(reponse);
                temp = reponse.main.temp;
                ciel = reponse.weather[0].description;
                // ville = reponse.name
                console.log(temp);
                document.querySelector("#ville").textContent = ville;
                document.querySelector("#temperature").textContent = temp+"°C";
                document.querySelector("#Ciel").textContent = ciel;
            }
        }
    }    
}


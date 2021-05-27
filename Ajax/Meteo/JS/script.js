contenu = document.querySelector("#Contenu");
boutton = document.querySelector("#boutton");
modifVille = document.querySelector('#changerVille');
ville = "Dunkerque"
meteo(ville)
boutton.addEventListener("click",function(){
    ville = modifVille.value
    modifVille.value=""
    meteo(ville)
})

function meteo(ville){
    const req = new XMLHttpRequest();
    req.open('GET','https://api.openweathermap.org/data/2.5/weather?q='+ville+'&appid=824e028458803a8c259fe9934721435c&units=metric&lang=fr',true);
    req.send();
    req.onload = function(){
        if(this.readyState===XMLHttpRequest.DONE){
            if(this.status===200){
                reponse = JSON.parse(this.responseText);
                console.log(this.responseText);
                // console.log(reponse);
                temp = reponse.main.temp;
                ciel = reponse.weather[0].description;
                vent = reponse.wind.speed
                vent = vent * 3.6
                ville = reponse.name
                icon = reponse.weather[0].icon;
                console.log(temp);
                console.log(icon);
                document.querySelector("#ville").textContent = ville;
                document.querySelector("#icon").innerHTML = '<img class = "Icon" src = "http://openweathermap.org/img/wn/'+ icon +'.png">';
                document.querySelector("#temperature").textContent = temp.toFixed(0)+"°C";
                document.querySelector("#Ciel").textContent = ciel;
                document.querySelector("#Vent").textContent = "Vent : "+vent.toFixed(0)+" KM/H";
            }
        }
    }    
}


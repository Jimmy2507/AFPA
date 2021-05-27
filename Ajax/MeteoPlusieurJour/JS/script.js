contenu = document.querySelector("#Contenu");
const req = new XMLHttpRequest();
ville = "Dunkerque"
req.open('GET','http://api.openweathermap.org/data/2.5/forecast?q='+ville+'&appid=824e028458803a8c259fe9934721435c&cnt=5&units=metric&lang=fr',true);
req.send(null);

req.onreadystatechange = function(e){
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            reponse = JSON.parse(this.responseText);
            console.log(this.responseText);
            console.log(reponse);
            ville = reponse.city.name
            document.querySelector("#ville").innerHTML = ville;
            //Duplique la div Jour
            jour = document.querySelector(".Jour")
            dupli = jour.cloneNode([true]);
            for (let i = 0; i < reponse.length; i++) {
                innerHTML.jour[i]
                temp = reponse.main.temp;
                ciel = reponse.weather[0].description;
                vent = reponse.wind.speed
                vent = vent * 3.6
                icon = reponse.weather[0].icon;
                console.log(temp);
                console.log(icon);
                document.querySelector("#ville").innerHTML = ville;
                document.querySelector("#icon").innerHTML = '<img class = "Icon" src = "http://openweathermap.org/img/wn/'+ icon +'.png">';
                document.querySelector("#temperature").textContent = temp.toFixed(0)+"°C";
                document.querySelector("#Ciel").textContent = ciel;
                document.querySelector("#Vent").textContent = "Vent : "+vent.toFixed(0)+" KM/H";

            }
        }
    }
}

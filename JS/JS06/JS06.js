listeH1 = document.getElementsByTagName("h1")
listeH2 = document.getElementsByTagName("h2")
listeH3 = document.getElementsByTagName("h3")
listeP = document.getElementsByTagName("p")

for (let i=0;i<listeH1.length;i++){
    listeH1[i].addEventListener("click",function(){
        changerCouleur(listeH1)
    })
}
for (let i=0;i<listeH2.length;i++){
    listeH2[i].addEventListener("click",function(){
        changerCouleur(listeH2)
    })
}
for (let i=0;i<listeH3.length;i++){
    listeH3[i].addEventListener("click",function(){
        changerCouleur(listeH3)
    })
}
for (let i=0;i<listeP.length;i++){
    listeP[i].addEventListener("click", function(){
        changerCouleurP(i)
    })
}

function changerCouleur(tab){
    for (let i=0;i<tab.length;i++){
        if(tab[i].style.color == "" || tab[i].style.color == "green"){
            tab[i].style.color = "red"
        }else if (tab[i].style.color == "red"){
            tab[i].style.color = "blue"
        }else if (tab[i].style.color == "blue"){
            tab[i].style.color = "green"
        }
    }
}

function changerCouleurP(i){
    if(listeP[i].style.color == "" || listeP[i].style.color == "blue"){
        listeP[i].style.color = "red"
    }else if (listeP[i].style.color == "red"){
        listeP[i].style.color = "blue"
    }
}
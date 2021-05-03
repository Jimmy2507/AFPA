nb = parseInt(prompt("Nombre de valeur : "))
tab = []
    for (let i = 0; i < nb; i++) {
        tab[i]=parseInt(prompt("Valeur : "));
    }
    nbPG =0
    tab.forEach(e => {
        if(nb > nbPG){
            nbPG = nb
        }
    });
    console.log("Le nombre le plus grand est : "+nbPG)


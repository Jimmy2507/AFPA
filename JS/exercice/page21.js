nb = parseInt(prompt("Nombre de note : "))
tab = []
    for (let i = 0; i < nb; i++) {
        tab[i]=parseInt(prompt("note : "));
    }

    //calcul de la moyenne

    sommes=0
    tab.forEach(e => {
        sommes = sommes + e
    });
    moy = sommes / tab.length()
    sommes = 0
    //Note supp a la moyenne
    tab.forEach(e => {
        if (e > moy) {
            sommes ++
        }
    });
    console.log("Il y a "+sommes+" notes au dessus de la moyenne")

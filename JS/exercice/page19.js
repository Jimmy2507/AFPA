nb = parseInt(prompt("Nombre de valeur : "))
tab = []
    for (let i = 0; i < nb; i++) {
        tab[i]=parseInt(prompt("Valeur : "));
    }
    
    tab.forEach(e=> {
        e++
        console.log(e)
    });


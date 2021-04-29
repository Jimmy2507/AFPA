sommes = 0
var tab=[]
for (let i = 0; i < 9; i++) {
    note = parseInt(prompt("Ecrire note"))
    tab[i]= note
    sommes = sommes + tab[i]
}
window.alert("Moyenne = "+sommes/9)
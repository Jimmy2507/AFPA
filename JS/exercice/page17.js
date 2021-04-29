do {
    chevauxPartants = parseInt(prompt("nombre de chevaux partant : "))
    chevauxJoues=parseInt(prompt("nombre de chevaux joués : "))
} while (chevauxJoues<=0 || chevauxPartants<chevauxJoues);
ordre = 1
chevauxJouesFactorielle=1
for(let i=1;i<=chevauxJoues;i++){
    chevauxJouesFactorielle=chevauxJouesFactorielle*i;
    ordre=ordre*(i+chevauxPartants-chevauxJoues);
}
Desordre=Ordre/chevauxJouesFactorielle;

window.alert("Dans l'ordre : 1 /"+ordre+" chance de gagner");
window.alert("Dans le desordre : 1 /"+Desordre+" chance de gagner");

var elig = 3;
var ecol = 3;
var nbclicks = 0;
function deplace(e) {
    var boutonClique = e.target;
    var id = boutonClique.id;
    var lig = id.substring(4, 5);
    var col = id.substring(5, 6);
    var caseVide = "case" + elig + ecol
    var boutonVide = document.getElementById(caseVide);
    if (Math.abs(elig - lig) == 1 ^ Math.abs(ecol - col) == 1) {
        boutonVide.innerHTML = boutonClique.innerHTML;
        boutonClique.innerHTML = "";
        boutonClique.setAttribute('class', 'caseVide');
        boutonVide.setAttribute('class', 'case');
        boutonClique.blur();
        elig = lig;
        ecol = col;
    }
}

function initGame() {
    var tab = [];
    for (let i = 1; i < 9; i++) {
        tab[i - 1] = i;
    }
    var lesCases = document.getElementsByClassName("case");
    for (let i = 0; i < 8; i++) {
        alea = Math.ceil(Math.random() * tab.length - 1);
        lesCases[i].innerHTML = tab[alea];
        tab.splice(alea, 1);
        lesCases[i].addEventListener("click", deplace);
    }
    document.getElementsByClassName("caseVide")[0].addEventListener("click", deplace);
}
initGame();
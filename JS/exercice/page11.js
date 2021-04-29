var score1 =  parseInt(prompt("Score du candidat numéro 1"));
var score2 =  parseInt(prompt("Score du candidat numéro 2"));
var score3 =  parseInt(prompt("Score du candidat numéro 3"));
var score4 =  parseInt(prompt("Score du candidat numéro 4"));

if(score1 > 50){
    resultat = "elu";
}
if(score1 > score2 || score1>score3 || score1>score4){
    resultat = "elu";
}
if(score2>=50 || score3>=50 || score4>=50){
    resultat = "battu";
}
if(score1<=50 && score1>=12.5 && score1>score2 && score1>score3 && score1>score4){
    resultat="en ballotage favorable";
}
if(score1<=50 && score1>=12.5 && (score1<score2 || score1<score3 || score1<score4)){
    resultat="en ballotage défavorable";
}
if (score1<=12.5) {
    resultat="battu"
}
if(score2>50 || score3>50 || score4>50){
    resultat="battu"
}

console.log("Le candidat numero 1 est "+resultat);
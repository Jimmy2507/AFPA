input = document.getElementsByTagName("input");
for (let i = 0; i < input.length; i++) {
    input[i].addEventListener("input",verifInput(i));
}
function verifInput(k){
    erreurs = document.getElementsByClassName("erreur")
    for (let i = 0; i < erreurs.length; i++) {
        if(k == i){
            if(input.checkValidity()){
                erreurs[i].innerHTML ="ok"
            }else{
                erreurs[i].innerHTML ="ko"
            }
        }
    }

}
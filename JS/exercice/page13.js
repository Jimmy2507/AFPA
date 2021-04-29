a = parseInt(prompt("numéro du jour"));
b= parseInt(prompt("numéro du mois"));
c= parseInt(prompt("numéro de l'année"))
vDate= new Date(c,b-1,a);
if(vDate.getFullYear()==c && vDate.getMonth()==b && vDate.getDate()==a){
    console.log("Date Valide");
}else{
    console.log("Date invalide");
}
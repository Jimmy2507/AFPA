nb =  parseInt(prompt("Ecrire un nb"))
factor = facto(nb)
console.log(factor)

function facto(x){
    if(x=1){
        return 1
    }else{
        return facto(x-1)*x
    }
}
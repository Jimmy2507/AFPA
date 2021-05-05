var img = document.getElementById("Image")

img.addEventListener("click",retournerImage)

function retournerImage(){
    if(img.innerHTML=='<img src ="./IMG/photo1.jpg"'){
        img.innerHTML=='<img src ="./IMG/photo2.jpg"';
        timer = setTimeout(retourner,3000)
    }else{
        img.innerHTML=='<img src ="./IMG/photo1.jpg"';
        clearTimeout(timer)
    }
}

function retourner(){
    img.innerHTML=='<img src ="./IMG/photo1.jpg"';
}
var solu = document.querySelector("#Solution");
solu.addEventListener("click", solution);
var reset = document.querySelector("#reinitialise")
trie()
reset.addEventListener("click",trie)

function trie(){
    mesImages = document.getElementsByClassName("verso");
    for (let i = 0; i < mesImages.length; i++) {
        afficheImage( mesImages[i],false);
    }
}

function solution() {
    imgs = document.getElementsByClassName("verso");
    for (let i = 0; i < imgs.length; i++) {
        imgs[i].src = "./IMG/" + imgs[i].getAttribute("dataImage");
    }
}

function afficheImage(image, recto) {
    if (recto)
        image.src = "./IMG/" + image.getAttribute("dataImage");
    else
        image.src = "./IMG/plage.jpg";
}


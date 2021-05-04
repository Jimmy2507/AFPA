var lab = document.querySelectorAll("label");

for (let i = 0; i < lab.length; i++) {
    lab[i].addEventListener("click",function(){
        checkBox(lab[i])
    });
}

function checkBox(e){
    check = e.previousElementSibling

    if(check.checked == false){
        check.checked = true;
        e.style.color = "green";
    }else{
        check.checked = false;
        e.style.color = "black";
    }        

    
        
    
}
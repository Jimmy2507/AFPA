//A bulle
temp = 0
tab=[1,2,3,4,5,6]
tab.forEach(e => {
    console.log(e)
});
bool=true
    while(bool = true){
        boolean = false
        for (let i = 0; i < tab.length; i++) {
            if (tab[i]<tab[i+1]) {
                temp = tab[i]
                tab[i]=tab[i+1]
                tab[i+1]=temp
                boolean = true
            }
        }
    }
tab.forEach(e => {
    console.log(e)
});
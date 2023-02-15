function oblicz(){
    let liczba1=parseInt(document.getElementById("liczbaA").value);
    let liczba2=parseInt(document.getElementById("liczbaB").value);
    let x=liczba1*liczba2;
    while(liczba2 !=0 ){
        let c = a % b;
        a=b;
        b=c;
    }
    let NWD=a;
    let NWW=x/NWD;
    document.getElementById("wynik").value=NWW;
}
function oblicz(){
let ilosc=parseInt(document.getElementById("ilosc").value);
    let rodzaj=document.getElementById("rodzaj").value;
    let koszt=0;
    if(rodzaj=="euro"){
        koszt=ilosc+" PLN = "+ilosc*0.21+" euro";
    }
    if(rodzaj=="dolar"){
        koszt=ilosc+" PLN = "+ilosc*0.23+" dolar";
    }
    if(rodzaj=="funt"){
        koszt=ilosc+" PLN = "+ilosc*0.19+" funt";
    }
    document.getElementById("wynik").value=koszt;
}


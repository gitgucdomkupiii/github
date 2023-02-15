function obliczModulo(){
    let liczba=parseInt(document.getElementById("liczba").value);
    if(liczba%4==0){
        document.getElementById("wynikModulo").value="Liczba jest podzielna przez 4";
    }else{
        document.getElementById("wynikModulo").value="Liczba NIE jest podzielna przez 4";
    }
}
function sumaCyfrLiczby(liczba){
    let sumaCyfr=0;
    while(liczba>0){
        sumaCyfr=sumaCyfr+liczba%10;
        liczba=Math.floor(liczba/10);
    }
    return sumaCyfr; 
}
function czyPodzielna(liczba){
    let sumaCyfr=sumaCyfrLiczby(liczba);
    let wynik="Liczba NIE JEST podzielna przez 4 - Rekurencja";
    if(sumaCyfr==2 || sumaCyfr==4 || sumaCyfr==8 ){
        wynik="Liczba jest podzielna przez 4 - Rekurencja";
    }
    return wynik;
}
function obliczRekurencja(){
    let liczba=parseInt(document.getElementById("liczba").value);
    let odpowiedz=czyPodzielna(liczba);
    document.getElementById("wynikRekurencja").value=sumaCyfr;
}
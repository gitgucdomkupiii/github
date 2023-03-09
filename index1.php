<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>szkoła</title>
</head>
<body>
<header>
        <h1>Szkoła</h1>
    </header>
    <main>
        <?php
            $connect=mysqli_connect('localhost','root','','4');
            if($connect){
                echo "Połączyliśmy się z bazą";
                $zapytanie="SELECT * from nauczyciel";
                $wynik=mysqli_query($connect,$zapytanie);
                while($wiersz=mysqli_fetch_array($wynik)){
                    $imie[]=$wiersz['imie'];
                    $nazwisko[]=$wiersz['nazwisko'];
                    $idnauczyciel[]=$wiersz['id'];
                }
                $zapytanie="SELECT * from dane";
                $wynik=mysqli_query($connect,$zapytanie);
                while($wiersz=mysqli_fetch_array($wynik)){
                    $idnauczyciel[]=$wiersz['id'];
                    $imie[]=$wiersz['imie'];
                    $nazwisko[]=$wiersz['nazwisko'];
                }
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $nauczycielID=$_POST["nauczyciel"];
                    $imie=$_POST["imie"];
                    $nazwisko=$_POST["nazwisko"];
                    $insert="INSERT INTO oceny VALUES(null,'$imie','$nazwisko')";
                    if(mysqli_query($connect,$insert)){
                        echo "Dodano dane do bazy";
                    }else{
                        echo "Bład dodawania do bazy";
                    }
                }
            }else{
                echo "Brak połączenia z bazą";
            }
            mysqli_close($connect);
        ?>
    <form method="POST">
        <label for="nauczyciel">Wybierz nauczyciela</label>
        <select name="nauczyciel" id="nauczyciel">
            <?php
                for($i=0;$i<count($nauczyciel);$i++){
                    echo "<option value=$idnauczyciel[$i]> $nauczyciel[$i]</option>";
                }
            ?>

        </select>
        <br>
        <label for="osoba">Wybierz osobę (nauczyciela)</label>
        <select name="osoba" id="osoba">
            <?php
                for($i=0;$i<count($imie);$i++){
                    echo "<option value=$idosoba[$i]> $imie[$i] $nazwisko[$i]</option>";
                }
            ?>

        </select>
        <br>
        <label for="ocena">Podaj ocenę</label>
        <input type="number" name="ocena" id="ocena">
        <br>
        <input type="submit" value="Zapisz do bazy">
    </form>
    </main>
    <footer>
        <p>Stronę wykonał Przemek</p>
    </footer>
</body>
</html>
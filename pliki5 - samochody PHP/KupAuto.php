<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komis aut</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1><b><i>KupAuto!</i></b> Internetowy Komis Samochodowy</h1>
    </header>
    <main>
        <section class="block1">
            <?php 
                $user = 'localhost';
                $root = 'root';
                $password = '';
                $database = 'kupauto';

                $con = mysqli_connect($user, $root, $password, $database);

                $request2 = 'SELECT model, rocznik, przebieg, paliwo, cena, zdjecie FROM samochody WHERE id = 10;';
                $result2 = mysqli_query($con, $request2);

                while ($row = mysqli_fetch_row($result2)) {
                    echo "<img class='image' src='$row[5]' alt='oferta dnia'>";
                    echo "<div class='scriptBlock1'>";
                    echo "<h4>Oferta dnia: Toyota $row[0]</h4>";
                    echo "<p>Rocznik: $row[1], przebieg: $row[2], rodzaj paliwa: $row[3]</p>";
                    echo "<h4>Cena: $row[4]</h4>";
                    echo "</div>";
                }
            ?>
            <!-- SKRYPT 1 -->
        </section>
        <section class="block2">
            <h2>Oferty wyróżnione</h2>
             <?php
                $request3 = 'SELECT marki.nazwa, samochody.model, samochody.rocznik, samochody.cena, samochody.zdjecie FROM marki 
                    JOIN samochody ON marki.id = samochody.marki_id WHERE samochody.wyrozniony = 1 LIMIT 4;';
                $result3 = mysqli_query($con, $request3);

                while ($row = mysqli_fetch_row($result3)) {
                    echo "<div class='scriptBlock2'>";
                    echo "<img src='$row[4]' alt='$row[1]'>";
                    echo "<h4>$row[0] $row[1]</h4>";
                    echo "<p>Rocznik: $row[2]</p>";
                    echo "<h4>Cena: $row[3]</h4>";
                    echo "</div>";
                }
             ?>

            <!-- SKRYPT 2 -->
        </section>
        <section id="baner2">
            <h2>Wybierz markę</h2>
            <form action="KupAuto.php" method="post">
                <select name="options" id="options">
                    <?php
                        $request1 = 'SELECT nazwa FROM marki;';
                        $result1 = mysqli_query($con, $request1);
                            
                        while ($row1 = mysqli_fetch_row($result1)) {
                            echo "<option value='$row1[0]'>$row1[0]</option>";
                        }
                    ?>
                </select>
                
                <input type="submit" value="Wyszukaj" name="sbmt">
            </form>
            <!-- SKRYPT 4 -->
            
            <?php 
                if (!empty($_POST['options'])) {
                    $options = $_POST['options'];
                    $request4 = "SELECT samochody.model, samochody.cena, samochody.zdjecie FROM samochody JOIN marki ON samochody.marki_id = marki.id WHERE marki.nazwa = '$options'";
                    $result4 = mysqli_query($con, $request4);

                        while ($row = mysqli_fetch_row($result4)) {
                            echo "<section id='baner'>";
                            echo "<img src='$row[2]' alt='$row[0]'>"; 
                            echo "<h4>$options $row[0]</h4>";
                            echo "<h4>Cena: $row[1]</h4>";
                            echo "</section>";
                        }
                }

                mysqli_close($con);
            ?>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: XXXXXXXXXXXX</p>
        <p><a href="http://firmy.pl/komis">Znajdź nas także</a></p>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Zdjęcia</h1>
    </header>
    <main>
        <section class="firstBlock">
            <h2>Tematy zdjęć</h2>
            <ol>
                <li>Zwierzęta</li>
                <li>Krajobrazy</li>
                <li>Miasta</li>
                <li>Przyroda</li>
                <li>Samochody</li>
            </ol>
        </section>
        <section class="secondBlock">
            <?php
                $con = mysqli_connect('localhost', 'root', '', 'galeria');

                $q2 = "SELECT zdjecia.plik, zdjecia.tytul, zdjecia.polubienia, autorzy.imie, autorzy.nazwisko 
                FROM zdjecia JOIN autorzy ON zdjecia.autorzy_id = autorzy.id ORDER BY autorzy.nazwisko ASC;";

                $result2 = mysqli_query($con, $q2);

                while ($row = mysqli_fetch_row($result2)) {
                    echo "<div class='phpScript'><img src='$row[0]' alt='zdjęcie'>";
                    echo "<h3>$row[1]</h3>";
                    if ($row[2] > 40) {
                        echo "<p>Autor: $row[3] $row[4].<br>Wiele osób polubiło ten obraz.</p>";
                    } else {
                        echo "<p>Autor: $row[3] $row[4]</p>";
                    }
                    echo "<a href='$row[0]' download>Pobierz</a></div>";
                }
            ?>
            <!-- SKRYPT 1 -->
        </section>
        <section class="thirdBlock">
            <h2>Najbradziej lubiane</h2>
            <?php
                $q1 = "SELECT tytul, plik FROM zdjecia WHERE zdjecia.polubienia>=100;";

                $result1 = mysqli_query($con, $q1);

                while ($row = mysqli_fetch_row($result1)) {
                    echo "<img src='$row[1]' alt='$row[0]'>";
                }

                mysqli_close($con);
            ?>
            <!-- SKRYPT 2 -->
            <b><span class="important">Zobacz wszystkie nasze zdjęcia</span></b>
        </section>
    </main>
    <footer>
        <h5>Stronę wykonał: XXXXXXXXXXXX</h5>
    </footer>
</body>
</html>
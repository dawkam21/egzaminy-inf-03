<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki po Europie</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <h1>BIURO TURYSTYCZNE</h1>
    </header>
    <main>
        <section class="data">
            <h3>Wycieczki, na które są wolne miejsca</h3>
            <ul>
                <?php 
                    $server = 'localhost';
                    $user = 'root';
                    $password = '';
                    $database = 'biuro';
                    $con = mysqli_connect($server, $user, $password, $database);

                    $q1 = "SELECT wycieczki.id, wycieczki.dataWyjazdu, wycieczki.cel, wycieczki.cena FROM wycieczki WHERE wycieczki.dostepna = TRUE;";
                    $res1 = mysqli_query($con, $q1);

                    while ($row = mysqli_fetch_row($res1)) {
                        echo "<li>$row[0]. dnia $row[1] jedziemy do $row[2], cena: $row[3]</li>";
                    }
                 ?>
            </ul>
        </section>
        <section class="leftBlock">
            <h2>Bestselery</h2>
            <table>
                <tr>
                    <td>Wenecja</td>
                    <td>kwiecień</td>
                </tr>
                <tr>
                    <td>Londyn</td>
                    <td>lipiec</td>
                </tr>
                <tr>
                    <td>Rzym</td>
                    <td>wrzesień</td>
                </tr>
            </table>
        </section>
        <section class="midBlock">
            <h2>Nasze zdjęcia</h2>
            <?php 
                $q2 = "SELECT zdjecia.nazwaPliku, zdjecia.podpis FROM zdjecia ORDER BY zdjecia.podpis DESC;";
                $res2 = mysqli_query($con, $q2);

                while ($row = mysqli_fetch_row($res2)) {
                    echo "<img src='zad4/$row[0]' alt='$row[1]'>";
                }

                mysqli_close($con);
            ?>
        </section>
        <section class="rightBlock">
            <h2>Skontaktuj się</h2>
            <a href="mailto:turysta@wycieczki.pl">napisz do nas</a>
            <p>telefon: 111222333</p>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: XXXXXXXXXXX</p>
    </footer>
</body>
</html>
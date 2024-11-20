<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj Europę</title>
    <link rel="stylesheet" href="styl9.css">
</head>
<body>
    <header>
        <h1>BIURO PODRÓŻY</h1>
    </header>
    <main>
        <section class="leftBlock">
            <h2>Promocje</h2>
            <table>
                <tr>
                    <td>Warszawa</td>
                    <td>od 600zł</td>
                </tr>
                <tr>
                    <td>Wenecja</td>
                    <td>od 1200zł</td>
                </tr>
                <tr>
                    <td>Paryż</td>
                    <td>od 1200zł</td>
                </tr>
            </table>
        </section>
        <section class="mainBlock">
            <h2>W tym roku jedziemy do...</h2>
            <?php 
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $database = 'podroze';

                $con = mysqli_connect($server, $user, $password, $database);

                $q1 = 'SELECT zdjecia.nazwaPliku, zdjecia.podpis FROM zdjecia ORDER BY zdjecia.podpis ASC;';

                $res1 = mysqli_query($con, $q1);

                while ($row = mysqli_fetch_row($res1)) {
                    echo "<img src='materialy6/$row[0]' alt='$row[1]' title='$row[1]'>";
                }
            ?>
        </section>
        <section class="rightBlock">
            <h2>Kontakt</h2>
            <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
            <p>telefon: 444555666</p>
        </section>
    </main>
    <section class="data">
        <h3>W poprzednich latach byliśmy...</h3>
        <ol>
            <?php 
                $q2 = 'SELECT wycieczki.cel, wycieczki.dataWyjazdu FROM wycieczki WHERE wycieczki.dostepna = FALSE;';

                $res2 = mysqli_query($con, $q2);

                while ($row = mysqli_fetch_row($res2)) {
                    echo "<li>Dnia $row[1] pojechaliśmy do $row[0]</li>";
                }

                mysqli_close($con);
            ?>
        </ol>
    </section>
    <footer>
        <p>Stronę wykonał: XXXXXXXXXX</p>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Hodowla świnek morskich - zamów świnkowe maluszki</h1>
    </header>
    <main>
        <section class="menu">
            <a href="peruwianka.php">Rasa Peruwianka</a>
            <a href="american.php">Rasa American</a>
            <a href="crested.php">Rasa Crested</a>
        </section>
        <section class="right">
            <h3>Poznaj wszystkie rasy świnek morskich</h3>
            <ol><!-- SKRYPT 1-->
                <?php
                    $user = 'localhost';
                    $root = 'root';
                    $password = '';
                    $database = 'hodowla';

                    $con = mysqli_connect($user, $root, $password, $database);

                    $q4 = "SELECT rasa FROM rasy;";
                    $result4 = mysqli_query($con, $q4);

                    while ($row = mysqli_fetch_row($result4)) {
                        echo "<li>$row[0]</li>";
                    }
                ?>
            </ol>
        </section>
        <section class="master">
            <img src="peruwianka.jpg" alt="Świnka morska rasy peruwianka">
            <!-- SKRYPT 2 -->
                <?php
                    $q2 = "SELECT DISTINCT swinki.data_ur, swinki.miot, rasy.rasa FROM swinki JOIN rasy ON swinki.rasy_id = rasy.id WHERE rasy.id = 1;";
                    $result2 = mysqli_query($con, $q2);

                    while ($row = mysqli_fetch_row($result2)) {
                        echo "<h2>Rasa: $row[2]</h2>";
                        echo "<p>Data urodzenia: $row[0]</p>";
                        echo "<p>Oznaczenie miotu: $row[1]</p>";
                    }

                ?>
            <hr>
            <h2>Świnki w tym miocie</h2>
            <!-- SKRYPT 3 -->
                <?php
                    $q3 = "SELECT imie, cena, opis FROM swinki WHERE rasy_id = 1;";
                    $result3 = mysqli_query($con, $q3);

                    while ($row = mysqli_fetch_row($result3)) {
                        echo "<h3>$row[0] - $row[1] zł</h3>";
                        echo "<p>$row[2]</p>";
                    }

                    mysqli_close($con);
                ?>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: XXXXXXXXXXXX</p>
    </footer>
</body>
</html>
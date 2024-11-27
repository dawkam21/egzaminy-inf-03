<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <h1>Pensjonat pod dobrym humorem</h1>
    </header>
    <main>
        <section class="leftBlock">
            <a href="index.html">GŁÓWNA</a>
            <img src="zad2/1.jpg" alt="pokoje">
        </section>
        <section class="midBlock">
            <a href="cennik.php">CENNIK</a>
            <table>
                <?php 
                    $server = 'localhost';
                    $user = 'root';
                    $password = '';
                    $database = 'wynajem';
                    $con = mysqli_connect($server, $user, $password, $database);

                    $q1 = "SELECT id, nazwa, cena FROM `pokoje`;";

                    $res = mysqli_query($con, $q1);

                    while ($row = mysqli_fetch_row($res)) {
                        echo "<tr>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "</tr>";
                    }
                    
                    mysqli_close($con);
                ?>
            </table>
        </section>
        <section class="rightBlock">
            <a href="kalkulator.html">KALKULATOR</a>
            <img src="zad2/3.jpg" alt="pokoje">
        </section>
    </main>
    <footer>
        <p>Stronę opracował: XXXXXXXXXX</p>
    </footer>
</body>
</html>
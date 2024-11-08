<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ważenie samochodów ciężarowych</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

    <section class="header1">
        <h1>Ważenie pojazdów we Wrocławiu</h1>
    </section>
    <section class="header2">
        <img src="obraz1.png" alt="waga">
    </section>

    <section class="leftBlock">
        <h2>Lokalizacje wag</h2>
        <ol>
            <?php
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $database = 'wazenietirow';
                
                $con = mysqli_connect($server, $user, $password, $database);

                $q1 = "SELECT ulica FROM lokalizacje;";
                $result1 = mysqli_query($con, $q1);

                while ($row = mysqli_fetch_row($result1)) {
                    echo "<li>ulica $row[0]</li>";
                }
            ?>
        </ol>
        <h2>Kontakt</h2>
        <a href="mailto:wazenie@wroclaw.pl">napisz</a>
    </section>
    <section class="mainBlock">
        <h2>Alerty</h2>
        <table>
            <thead>
                <th>rejestracja</th>
                <th>ulica</th>
                <th>waga</th>
                <th>dzień</th>
                <th>czas</th>
            </thead>
            <tbody>
                <?php
                    $q2 = "SELECT wagi.rejestracja, wagi.waga, wagi.dzien, wagi.czas, lokalizacje.ulica FROM wagi 
                    JOIN lokalizacje ON wagi.lokalizacje_id = lokalizacje.id WHERE wagi.waga > 5;";
                    $result2 = mysqli_query($con, $q2);

                    while ($row = mysqli_fetch_row($result2)) {
                        echo "<tr>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[4]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "<td>$row[3]</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <!-- SKRYPT 3 -->
        <?php
            $q3 = "INSERT INTO `wagi`(`id`, `lokalizacje_id`, `waga`, `rejestracja`, `dzien`, `czas`) 
            VALUES ('', 5, FLOOR(1+RAND()*10), 'DW12345', CURRENT_DATE, CURRENT_TIME);";
            $result3 = mysqli_query($con, $q3);

            header("refresh:10");
            
            mysqli_close($con);
        ?>
    </section>
    <section class="rightBlock">
        <img class="obraz2" src="obraz2.jpg" alt="tir">
    </section>

    <footer>
        <p>Stronę wykonał: XXXXXXXXXXXX</p>
    </footer>
</body>
</html>
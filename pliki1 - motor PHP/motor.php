    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "motory";
        $conn = mysqli_connect($servername, $username, $password, $database);

        $names = "SELECT wycieczki.nazwa, wycieczki.opis, wycieczki.poczatek, zdjecia.zrodlo FROM wycieczki JOIN zdjecia ON zdjecia.id=wycieczki.zdjecia_id;";
        $q2 = "SELECT COUNT(id) FROM wycieczki;";
    ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Motocykle</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styl.css'>
</head>
<body>
        <img id="motocykl" src="motor.png" alt="motocykl">
        <header>
            <h1>Motocykle - moja pasja</h1>
        </header>
        <main>
            <section class="leftBlock">
                <h2>Gdzie pojechać?</h2>
            <!-- description list / skrypt 1-->
                <ul>
                    <?php
                        $result = mysqli_query($conn, $names);
                        while($row = mysqli_fetch_row($result)) {
                            echo "<li class=\"wycieczka\">$row[0], rozpoczyna się w $row[2], <a href=$row[3].jpg> zobacz zdjęcie </a></li>";
                            echo "<li class=\"opis\">$row[1]</li>";
                        }
                    ?>
                </ul>
            </section>
            <section class="rightBlock">
                <h2>Co kupić?</h2>
                <ol>
                    <li>Honda CBR125R</li>
                    <li>Yamaha YBR125</li>
                    <li>Honda VFR800i</li>
                    <li>Honda CBR1100XX</li>
                    <li>MBW R1200GS LC</li>
                </ol>
            </section>
            <section class="secondRight">
                <h2>Statystyki</h2>
                <p>Wpisanych wycieczek: 
                    <?php 
                        $rs = mysqli_query($conn, $q2);
                        $row = mysqli_fetch_row($rs);
                        echo $row[0];
                        mysqli_close($conn);
                    ?></p> <!--skrypt 2-->
                <p>Użytkowników forum: 200</p>
                <p>Przesłanych zdjęć: 1300</p>
            </section>
        </main>
    <footer>
        <p>Stronę wykonał: XXXXXXXXXXXX</p>
        <p>Wszelkie prawa zastrzeżone</p>
        <p>Copyright &copy; 2024</p>
    </footer>
</body>
</html>
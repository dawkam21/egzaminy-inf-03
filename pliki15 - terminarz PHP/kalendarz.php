<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania na lipiec</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <section class="header1">
        <img src="materialy4/logo1.png" alt="lipiec">
    </section>
    <section class="header2">
        <h1>TERMINARZ</h1>
        <p>najbliższe spotkania: 
            <?php
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $database = 'terminarz';

                $con = mysqli_connect($server, $user, $password, $database);

                $q1 = "SELECT DISTINCT zadania.wpis FROM zadania WHERE
                zadania.dataZadania >= '2020-07-01' AND zadania.dataZadania <= '2020-07-07'
                AND zadania.wpis != '' AND zadania.wpis IS NOT NULL;";

                $res1 = mysqli_query($con, $q1);

                while ($row = mysqli_fetch_row($res1)) {
                    echo "<span>$row[0]; </span>";
                }
            ?>
        </p>
    </section>
    <section class="main">
        <?php
            $q2 = "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'lipiec';";

            $res2 = mysqli_query($con, $q2);

            while ($row = mysqli_fetch_row($res2)) {
                echo "<section class='calendar'>";
                echo "<h6>$row[0]</h6>";
                echo "<p>$row[1]</p>";
                echo "</section>";
            }

            mysqli_close($con);
        ?>
    </section>
    <section class="footer">
        <a href="sierpien.html">Terminarz na sierpień</a>
        <p>Stronę wykonał: XXXXXXXXXXX</p>
    </section>
</body>
</html>
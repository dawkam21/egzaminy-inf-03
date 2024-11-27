<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sierpniowy kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header>
        <section class="header1">
            <h1>Organizer: SIERPIEŃ</h1>
        </section>
        <section class="header2">
            <form action="organizer.php" method="post">
                <label for="">Zapisz wydarzenie
                    <input type="text" name="save" id="">
                </label>
                <input type="submit" value="OK" name="btn">
            </form>
        <?php 
            $server = 'localhost';
            $user = 'root';
            $password = '';
            $database = 'kalendarz';
            $con = mysqli_connect($server, $user, $password, $database);

            if (isset($_POST['btn'])) {
                $wpis = $_POST['save'];
                $q4 = "UPDATE zadania SET wpis = '$wpis' WHERE dataZadania = '2020-08-09';";
                $res4 = mysqli_query($con, $q4);
            }

        ?>
        </section>
        <section class="header3">
            <img src="zad5/logo2.png" alt="sierpień">
        </section>
    </header>
    <main>
        <?php 
            $q1 = "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'sierpien';";
            $res1 = mysqli_query($con, $q1);

            while ($row = mysqli_fetch_row($res1)) {
                echo "<section class='calendar'>
                        <h5>$row[0]</h5>
                        <p>$row[1]</p>
                    </section>";
            }

            mysqli_close($con);
        ?>
    </main>
    <footer>
        <p>Stronę wykonał: XXXXXXXXXXX</p>
    </footer>
</body>
</html>
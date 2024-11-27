<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>Grupa Polskich Kwiaciarni</h1>
    </header>
    <section class="leftBlock">
        <h2>Menu</h2>
        <ol>
            <li><a href="index.html">Strona główna</a></li>
            <li><a href="https://www.kwiaty.pl" target="_blank">Rozpoznaj kwiaty</a></li>
            <li><a href="znajdz.php">Znajdź kwiaciarnię</a>
                <ul>
                    <li>w Warszawie</li>
                    <li>w Malborku</li>
                    <li>w Poznaniu</li>
                </ul>
            </li>
        </ol>
    </section>
    <section class="rightBlock">
        <h2>Znajdź kwiaciarnię</h2>
        <form action="znajdz.php" method="post">
            <label for="flowerShop">Podaj nazwę miasta:
                <input type="text" name="flowerShop" id="">
            </label>
            <input type="submit" value="SPRAWDŹ">
        </form>
            <?php 
                $server = 'localhost';
                $user = 'root';
                $password = '';
                $database = 'kwiaciarnia';
                $con = mysqli_connect($server, $user, $password, $database);

                $flowers = $_POST['flowerShop'];

                $q1 = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto = '$flowers';";

                $res1 = mysqli_query($con, $q1);

                while ($row = mysqli_fetch_row($res1)) {
                    echo "<h3>$row[0], $row[1]</h3>";
                }

                mysqli_close($con);
            ?>
    </section>
    <footer>
        <p>Stronę opracował: XXXXXXXXXX</p>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poziomy rzek</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <section id="header1">
            <img src="obraz.png" alt="Mapa Polski">
        </section>
        <section id="header2">
            <h1>Rzeki w województwie dolnośląskim</h1>
        </section>
    </header>
    <main>
        <section class="menu">
            <form action="poziomRzek.php" method="post">
                <label class="radio">
                    <input type="radio" name="radio" value="Wszystkie"> Wszystkie
                </label>

                <label class="radio">
                    <input type="radio" name="radio" value="Ostrzegawcze"> Ponad stan ostrzegawczy
                </label>

                <label class="radio">
                    <input type="radio" name="radio" value="Alarmowe"> Ponad stan alarmowy
                </label>
                
                <input type="submit" value="Pokaż" name="sbmt">
            </form>
        </section>
        <section class="left">
            <h3>Stany na dzień 2022-05-05</h3>
            <table>
                <thead>
                    <th>Wodomierz</th>
                    <th>Rzeka</th>
                    <th>Ostrzegawczy</th>
                    <th>Alarmowy</th>
                    <th>Aktualny</th>
                </thead>
                <tbody><!-- SKRYPT 1 -->
                    <?php
                     
                        $user = 'localhost';
                        $root = 'root';
                        $password = '';
                        $database = 'rzeki';

                        $con = mysqli_connect($user, $root, $password, $database);

                        
                        if (isset($_POST['radio'])) {
                            $q2 = "SELECT wodowskazy.nazwa, wodowskazy.rzeka, wodowskazy.stanOstrzegawczy, wodowskazy.stanAlarmowy, pomiary.stanWody 
                            FROM pomiary JOIN wodowskazy ON pomiary.wodowskazy_id = wodowskazy.id WHERE pomiary.dataPomiaru = '2022-05-05';";
                            
                            $q3 = "SELECT wodowskazy.nazwa, wodowskazy.rzeka, wodowskazy.stanOstrzegawczy, wodowskazy.stanAlarmowy, pomiary.stanWody 
                            FROM pomiary JOIN wodowskazy ON pomiary.wodowskazy_id = wodowskazy.id 
                            WHERE pomiary.dataPomiaru = '2022-05-05' AND pomiary.stanWody > wodowskazy.stanOstrzegawczy;";

                            $q3Modified = "SELECT wodowskazy.nazwa, wodowskazy.rzeka, wodowskazy.stanOstrzegawczy, wodowskazy.stanAlarmowy, pomiary.stanWody 
                            FROM pomiary JOIN wodowskazy ON pomiary.wodowskazy_id = wodowskazy.id 
                            WHERE pomiary.dataPomiaru = '2022-05-05' AND pomiary.stanWody > wodowskazy.stanAlarmowy;";

                            $result2 = mysqli_query($con, $q2);
                            $result3 = mysqli_query($con, $q3);
                            $result3Modified = mysqli_query($con, $q3Modified);

                                if ($_POST['radio'] == 'Wszystkie') {
                                    while ($row = mysqli_fetch_row($result2)) {
                                        echo "<tr>";
                                        echo "<td>$row[0]</td>";
                                        echo "<td>$row[1]</td>";
                                        echo "<td>$row[2]</td>";
                                        echo "<td>$row[3]</td>";
                                        echo "<td>$row[4]</td>";
                                        echo "</tr>";
                                        }
                                }
                            
                                if ($_POST['radio'] == 'Ostrzegawcze') {
                                    while ($row = mysqli_fetch_row($result3)) {
                                        echo "<tr>";
                                        echo "<td>$row[0]</td>";
                                        echo "<td>$row[1]</td>";
                                        echo "<td>$row[2]</td>";
                                        echo "<td>$row[3]</td>";
                                        echo "<td>$row[4]</td>";
                                        echo "</tr>";
                                    }
                                }
                                
                                if ($_POST['radio'] == 'Alarmowe') {
                                    while ($row = mysqli_fetch_row($result3Modified)) {
                                        echo "<tr>";
                                        echo "<td>$row[0]</td>";
                                        echo "<td>$row[1]</td>";
                                        echo "<td>$row[2]</td>";
                                        echo "<td>$row[3]</td>";
                                        echo "<td>$row[4]</td>";
                                        echo "</tr>";
                                    }
                                }
                            }
                        ?>
                </tbody>
            </table>
        </section>
        <section class="right">
            <h3>Informacje</h3>
            <ul>
                <li>Brak ostrzeżeń o burzach z gradem</li>
                <li>Smog w mieście Wrocław</li>
                <li>Silny wiatr w Karkonoszach</li>
            </ul>
            <h3>Średnie stany wód</h3>
            <!-- SKRYPT 2 -->
             <?php 
                $q4 = "SELECT dataPomiaru, AVG(stanWody) FROM pomiary GROUP BY dataPomiaru;";
                $result4 = mysqli_query($con, $q4);

                while ($row = mysqli_fetch_row($result4)) {
                    echo "<p>$row[0]: $row[1]</p>";
                }

                mysqli_close($con);
             ?>
             <a href="https://komunikaty.pl">Dowiedz się więcej</a>
             <img src="obraz2.jpg" alt="rzeka">
        </section>
    </main>
    <footer>
        <p>Strone wykonał: XXXXXXXXXXXX</p>
    </footer>
</body>
</html>
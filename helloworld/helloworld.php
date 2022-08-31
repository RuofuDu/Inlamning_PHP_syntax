<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table>
        <tr class="titel">
            <th>Land</th>
            <th>huvudstad</th>
        </tr>

        <?php
        $huvudstader = array("Sverige" => "Stockholm", "Finland" => "Helsingfors", "Danmark" => "Köpenhamn", "Norge" => "Oslo", "Island" => "Reykjavik", "Estland" => "Tallinn", "Lettland" => "Riga", "Litauen" => "Vilnius");

        foreach ($huvudstader as $x => $x_value) {
            echo "$x" . "s huvudstad är $x_value.";
            echo "<br>";
        }
        echo "<br>";
        foreach ($huvudstader as $x => $x_value) {
            echo "<tr><th>$x</th><th>$x_value</th></tr>";
        }
        ?>

    </table>
    <br>
    <table>
        <tr class="titel">
            <th>Kurs</th>
            <th>Lärare</th>
        </tr>
        <?php
        $kurslarare = array("Webbserverprogrammering1" => "Holger", "Matematik5" => "Sevil", "MatematikSpec" => "Nikodemos", "Svenska3" => "Anna-Karin", "Historia1a1" => "Tommy", "Fysik2" => "Charles");
        foreach ($kurslarare as $x => $x_value) {
            echo "<tr><th>$x</th><th>$x_value</th></tr>";
        }
        ?>
    </table>

</body>

</html>
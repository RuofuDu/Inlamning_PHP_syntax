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
            echo "<tr><th>$x</th><th>$x_value</th></tr>";
        }

        ?>

    </table>

</body>

</html>
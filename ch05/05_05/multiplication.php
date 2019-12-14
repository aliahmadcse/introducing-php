<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Challenge: using loops</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1>Multiplication Table</h1>
    <table>
        <?php
        echo "<tr>";
        echo "<th>&nbsp;</th>";
        for ($i = 1; $i <= 12; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";

        for ($row = 1, $col = 1; $row <= 12; $row++) :
            echo "<tr>";
            while ($col <= 12) :
                if ($col == 1) :
                    echo "<td>$row</td>";
                endif;
                echo '<td>' . $row * $col . '</td>';
                $col++;
            endwhile;
            echo "</tr>";
            $col = 1;
        endfor;
        ?>
    </table>
</body>

</html>
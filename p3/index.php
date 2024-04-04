<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="vsewport" content="width=device-width, initial-scale=1.0">
    <title>PENGULANGAN PHP</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- <?php
        for ($i = 1; $i <= 3; $i++) {
            echo "<tr>";
            for ($s = 1; $s <= 5; $s++) {
                echo "<td>$i,$s</td>";
            }
            echo "</tr>";
        }
        ?>  -->
        <?php for ($i = 1; $i <= 3; $i++) { ?>
            <tr>
                <?php for ($s = 1; $s <= 5; $s++) { ?>
                    <td>
                        <?php echo "$i,$s" ?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>

    </table>
</body>

</html>
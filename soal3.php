<!DOCTYPE html>
<html>

<body>
    <?php

    function drawImage($parameter)
    {
        for ($i = 0; $i < $parameter; $i++) {
            for ($j = 0; $j < $parameter; $j++) {
                echo "* #";
            }

            echo "<br>";
        }
    }

    drawImage(7);
    ?>
</body>

</html>
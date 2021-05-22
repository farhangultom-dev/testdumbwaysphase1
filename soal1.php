<!DOCTYPE html>
<html>

<body>
    <?php

    function cetak($parameter)
    {
        $karakter = 'abcdefghijklmnopqrstuvwxyz123456789';

        for ($i = 0; $i < $parameter; $i++) {
            echo substr(str_shuffle($karakter), 0, 28);
            echo "<br>";
        }
    }

    cetak(3);

    ?>

</body>

</html>
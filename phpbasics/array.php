<!DOCTYPE html>
<html>

<body>

    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

    echo count($cars);

    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars);

    // Loop Through an Indexed Array
    for ($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";


        // PHP Associative Arrays
        $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
        echo "Peter is " . $age['Peter'] . " years old.";

        ?>

    </body>

    </html>

    <!-- <!DOCTYPE html>
<html>
<body>

<?php

    }
    ?>

</body>
</html> -->
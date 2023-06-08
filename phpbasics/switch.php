<!DOCTYPE html>
<html>

<body>

    <?php
    $favclr = "red";

    switch ($favclr) {
        case "green":
            echo "Your favorite color is green!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "red":
            echo "Your favorite color is red!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }
    ?>

</body>

</html>
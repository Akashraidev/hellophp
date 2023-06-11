<!DOCTYPE html>
<html>

<body>

    <?php
    function setnum(int $minnum = 50)
    {
        echo "The Number is : $minnum <br>";
    }

    setnum(150); // pass argument
    setnum(); // default argument 50
    setnum(135);
    setnum(80);
    ?>

</body>

</html>
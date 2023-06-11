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

<!-- The Number is : 150
The Number is : 50
The Number is : 135
The Number is : 80 -->

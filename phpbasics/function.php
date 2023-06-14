<!DOCTYPE html>
<html>

<body>

    <?php
    function writeMsg()
    {
        echo "Hey , I'm Akash!";
    }

    writeMsg();
    writeMsg();
    writeMsg();

    echo "<br>";
    // Function Arguments
    function familyName($fname)
    {
        echo "$fname Refsnes.<br>";
    }

    familyName("A");
    familyName("H");
    familyName("S");
    familyName("K");
    familyName("B");


    echo "<br>";
    //  function with two arguments
    
    function functionwithtwoarguments($fname, $year)
    {
        echo "$fname Refsnes. Born in $year <br>";
    }

    functionwithtwoarguments("A", "1975");
    functionwithtwoarguments("S", "1978");
    functionwithtwoarguments("K", "1983");

    ?>

</body>

</html>

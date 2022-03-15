<?php
    $name = "Mohamed Alkutainy";
    $credits = 14;
    $gpa= 3.01;
    echo " varible name of type: ";
    var_dump($name);
    echo "<br/>";
    echo " varible credits of type: ";
    var_dump($credits);
    echo "<br/>";
    echo " varible gpa of type: ";
    var_dump($gpa);
    echo "<br/>";
    echo "<hr/>";


    echo "<h1>Welcome $name </h1><br/>";
    if($credits >= 12 )
        echo "<h2>FULL TIME STUDENT</h2><br/>";
    else
        echo "<h2>PART TIME STUDENT</h2><br/>";
echo "<br/>";
echo "<hr/>";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];



    ?>

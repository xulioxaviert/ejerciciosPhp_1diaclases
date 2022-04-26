<?php



if (isset($_GET["number"])) {
    $number = $_GET["number"];
    piramid($number);
    echo "<br />";
    piramid2($number);

} else {
    echo "no valid number";
}

function piramid($number)
{
    for ($i = 1; $i <= $number; $i++) {
        echo "<pre>";

        for ($j = 0; $j < $number - $i; $j++) {
            echo "&nbsp;";
        }
        for ($k = 0; $k < $i; $k++) {
            echo "* ";
        }

        echo "</pre>";
    }
}

function piramid2($number)
{
    for ($i = 1; $i <= $number; $i++) {
        echo "<pre>";
        echo str_repeat("&nbsp;", $number - $i);
        echo str_repeat("* ", $i);
        echo "</pre>";
    }
}
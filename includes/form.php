<?php

function output_form($method, $action)
{
    echo "<form method='{$method}' action='{$action}'>";
    echo '<p><b>YEAR:</b> <input type="text" name="' . YEAR_KEY . '"></p>' . "\n";
    echo '<p>Male <input type="radio" value="M" name="' . GENDER_KEY. '">' . "\n";
    echo 'Female <input type="radio" value="F" name="' . GENDER_KEY . '"></p>' . "\n";
    echo ' <input type="submit" value="SUBMIT">' . "\n";
    echo '   </form>' . "\n";
}
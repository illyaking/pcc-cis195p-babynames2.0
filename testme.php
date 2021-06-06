<?php

require_once ('includes/week9_constants.php');
require_once ('includes/week9_db_constants.php');
require_once ('includes/NamePopularityRecord.php');
require_once ('includes/NamePopularitySet.php');
require_once ('includes/NameSet.php');
require_once ('includes/MetaphoneSet.php');
require_once ('includes/week9_code.php');
require_once ('includes/BarChart.php');

$records = new MetaphoneSet('Marc', 'M', 50);
$mark1 = new NamePopularityRecord('Marc', 'M', 1962, 1, 1000, 90000, 'MRK');
$mark2 = new NamePopularityRecord('Marc', 'M', 1962, 1, 1000, 90000, 'MRK');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Object-Oriented Programming</title>
    <link rel="stylesheet" type="text/css" href="includes/week9.css.php">
    <script src="includes/week9.js.php"></script>
</head>
<body>
<pre>
    <?php
    foreach ($records->getRecords() as $record) {
        MetaphoneSet::$count++;
        $record->setRank(MetaphoneSet::$count);
    }
    print_r($records);
    MetaphoneSet::whatAmI();
    echo 'mark1 == mark2: ' . (($mark1 == $mark2) ? "True" : "False") . "<br>";
    echo 'mark1 === mark2: ' . (($mark1 === $mark2) ? "True" : "False") . "<br>";
    echo 'mark1 === mark1: ' . (($mark1 === $mark1) ? "True" : "False") . "<br>";
    $mark3 =& $mark1;
    echo 'mark1 === mark3: ' . (($mark1 === $mark3) ? "True" : "False") . "<br>";
    ?>
</pre>
</body>
</html>

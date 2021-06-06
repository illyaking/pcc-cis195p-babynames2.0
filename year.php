<?php

require_once ('includes/week9_constants.php');
require_once ('includes/week9_db_constants.php');
require_once ('includes/NamePopularityRecord.php');
require_once ('includes/NamePopularitySet.php');
require_once ('includes/YearSet.php');
require_once ('includes/week9_code.php');
require_once ('includes/BarChart.php');
require_once ('includes/YearBarChart.php');

$year = isset($_GET[YEAR_KEY]) ? $_GET[YEAR_KEY] : 1915;
$gender = isset($_GET[GENDER_KEY]) ? $_GET[GENDER_KEY] : 'F';

$records = new YearSet($year, $gender, NUM_BARS);
$chart = new YearBarChart($records->getRecords(), BAR_CHART_HEIGHT);
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
<div class="center"><h1>Report for <?php echo $year; ?></h1></div>
<?php $chart->draw(); ?>
</body>
</html>

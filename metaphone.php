<?php

require_once ('includes/week9_constants.php');
require_once ('includes/week9_db_constants.php');
require_once ('includes/NamePopularityRecord.php');
require_once ('includes/NamePopularitySet.php');
require_once ('includes/MetaphoneSet.php');
require_once ('includes/week9_code.php');
require_once ('includes/BarChart.php');
require_once ('includes/MetaphoneBarChart.php');

$metaphone= isset($_GET[METAPHONE_KEY]) ? $_GET[METAPHONE_KEY] : 'MR';
$gender = isset($_GET[GENDER_KEY]) ? $_GET[GENDER_KEY] : 'F';

$records = new MetaphoneSet($metaphone, $gender, NUM_BARS);
$chart = new MetaphoneBarChart($records->getRecords(), BAR_CHART_HEIGHT);

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
<div class="center"><h1>Report for <?php echo $metaphone; ?></h1></div>
<?php $chart->draw(); ?>
</body>
</html>

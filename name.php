<?php

require_once ('includes/week9_constants.php');
require_once ('includes/week9_db_constants.php');
require_once ('includes/NamePopularityRecord.php');
require_once ('includes/NamePopularitySet.php');
require_once ('includes/NameSet.php');
require_once ('includes/week9_code.php');
require_once ('includes/BarChart.php');
require_once ('includes/NameBarChart.php');

$name = isset($_GET[NAME_KEY]) ? $_GET[NAME_KEY] : 'Mary';
$gender = isset($_GET[GENDER_KEY]) ? $_GET[GENDER_KEY] : 'F';
$metaphone = metaphone($name);

$records = new NameSet($name, $gender, $metaphone);
$chart = new NameBarChart($records->getRecords(), BAR_CHART_HEIGHT);

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
<div class="center"><h1>Report for <?php echo $name; ?> [<a id="metaphone" href="<?php echo
            'metaphone.php?' . METAPHONE_KEY . '=' . $metaphone . '&' . GENDER_KEY . '=' . $gender; ?>"><?php echo $metaphone; ?></a>]</h1></div>
<?php $chart->draw(); ?>
</body>
</html>

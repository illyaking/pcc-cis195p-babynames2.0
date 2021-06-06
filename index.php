<?php
header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Pragma: no-cache");
require_once 'includes/constants.php';
require_once ('includes/form.php');
require_once ('includes/week9_constants.php');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Popular Babynames</title>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="includes/names.css.php">
</head>
<body>
<img src="images/adele-morris-unsplash.jpg" alt="New born baby Photos by Adele Morris Photography ">
<h1>Popular Baby Names by Year</h1>
<p>Data is from the <a href="https://www.ssa.gov/oact/babynames/limits.html" target="_blank">United States Social Security</a> department.</p>
<p>The data is restricted to a minimum of 5 occurrences to protect personal privacy. The data is from 1915 to 2014.</p>
<?php output_form("GET", TARGET_PAGE); ?>
<address>
<p>@ <?php echo date('Y'); ?> Illya King. All Rights Reserved.</p>
</address>
</body>
</html>

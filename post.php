<!DOCTYPE html>
 <?php
$list = array (
  array($_GET["name"], $_GET["seconds"])
);

$file = fopen("leader.csv","a");

foreach ($list as $line) {
  fputcsv($file, $line);
}

fclose($file);
?>

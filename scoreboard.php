<!DOCTYPE html>
<title>Blocks Scordboard</title>
<h1 style="text-align: center;" >Scoreboard</h1>
<hr style="border: 2px solid black">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid black;
  text-align: center;
  padding: 5px;
}
</style>

<table id="demo">
<tr>
<td>Name</td>
<td>Seconds</td>
</tr>
<?php
  // (A) OPEN CSV FILE
  $stream = fopen("leader.csv", "r");

  // (B) EXTRACT ROWS & COLS
  while (($row = fgetcsv($stream)) !== false) {
    echo "<tr>";
    foreach ($row as $col) { echo "<td>$col</td>"; }
    echo "</tr>";
  }

  // (C) CLOSE CSV FILE
  fclose($stream);
?></table>

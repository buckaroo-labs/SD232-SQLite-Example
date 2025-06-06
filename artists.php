<!DOCTYPE HTML>
<HTML lang="en">
  <HEAD>
    <TITLE>Chinook | Artists</TITLE>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="styles.css">
  </HEAD>
  <BODY>
  <H1>Artists</H1>
  <table>
  <tr><th>Name</th></tr>
  
<?php
$db = new SQLite3('chinook.db');
$results = $db->query('SELECT ArtistId, name FROM artists ORDER BY name');
while ($row = $results->fetchArray()) {
  echo('<tr><td><a href="albums.php?artistid=' . $row[0] . '">' . $row[1] . '</td></tr>' . "\n");
}
?>


</table>
</BODY>
</HTML>
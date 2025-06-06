<!DOCTYPE HTML>
<HTML lang="en">
  <HEAD>
    <TITLE>Chinook | Tracks</TITLE>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="styles.css">
  </HEAD>
  <BODY>
  <H1>Tracks</H1>
  <table>
  <tr><th>Title</th></tr>
 

<?php
$db = new SQLite3('chinook.db');
$sql = 'SELECT  name FROM tracks';
if (isset($_GET['albumid']) && is_numeric($_GET['albumid'])) { 
	$sql .= ' WHERE albumid=' . $_GET['albumid']; 
	}
$results = $db->query($sql);
while ($row = $results->fetchArray()) {
  echo('<tr><td>' . $row[0] . '</td></tr>' . "\n");
}
?>


</table>
</BODY>
</HTML>
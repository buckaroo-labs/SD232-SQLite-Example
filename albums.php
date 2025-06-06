<!DOCTYPE HTML>
<HTML lang="en">
  <HEAD>
    <TITLE>Chinook | Albums</TITLE>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="styles.css">
  </HEAD>
  <BODY>
  <H1>Albums</H1>
  <table>
  <tr><th>Title</th></tr>
  

<?php
$db = new SQLite3('chinook.db');
$sql = 'SELECT ArtistId, AlbumId, Title FROM albums';
if (isset($_GET['artistid']) && is_numeric($_GET['artistid'])) { 
	$sql .= ' WHERE ArtistID=' . $_GET['artistid']; 
	}
$results = $db->query($sql);
while ($row = $results->fetchArray()) {
  echo('<tr><td><a href="tracks.php?albumid=' . $row[1] . '">' . $row[2] . '</td></tr>' . "\n");
}
?>

</table>
</BODY>
</HTML>
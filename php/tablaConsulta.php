<?php 
$link = mysql_connect("localhost", "prebesBD"); 
mysql_select_db("mydb", $link); 
$result = mysql_query("SELECT nombre, username FROM agenda", $link); 
echo "<table border = '1'> \n"; 
echo "<tr><td>nombre</td><td>username</td></tr> \n"; 
while ($row = mysql_fetch_row($result)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td></tr> \n"; 
} 
echo "</table> \n"; 
?> 
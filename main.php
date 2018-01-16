<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>readContactCSV.php</title>
</head>
<body>
 <h1></h1>
 <a href ="home.html">Airports map</a>
 <div>
<?php
echo "<html><body><table>\n\n";
$f = fopen("C:/Users/julia/Desktop/map/vismap/airports.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";
?> 
 
 </div>
</body>
</html>
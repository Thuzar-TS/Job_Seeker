<?php 

$xmldata = simplexml_load_file("reports.xml") or die("Failed to load");
echo "<table border='1'>";   
	foreach($xmldata->children() as $empl) {   
	 echo "<tr>";
	 echo "<td>";
	 echo $empl->name;
	 echo "</td>";
	 echo "<td>";
	 echo $empl->author;
	 echo "</td>";
	 echo "<td>";
	 echo $empl->price;
	 echo "</td>";
	 echo "<td>";
	 echo $empl->ISBN;
	 echo "</td>";
	 echo "<td>";
	 echo $empl->category;
	 echo "</td>";
	 echo "</tr>";
	} 
echo "</table>";   
?>
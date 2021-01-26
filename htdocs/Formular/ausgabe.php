<body style="background-color:lightblue; font-size:25">
<?php

	echo "Vorname:"." ".$_GET['vname'];
	echo "<br>";
	
	echo "Nachname:"." ".$_GET['name'];
	echo "<br>";
	
	echo "Alter:"." ".$_GET['age'];
	echo "<br>";
	
	echo "Datum:"." ".$_GET['date'];
	echo "<br>";
	
	echo "Geschlecht:"." ".$_GET['geschlecht'];
	echo "<br>";
	
	echo "Text:"." ".$_GET['Text'];
	echo "<br>";
	
	if(isset($_GET['oldEnough'])) { 
    $var = $_GET['oldEnough']; 
    if(isset($var)) { 
        echo "Über 18: Ja";
	}
	}
	else
	{
		echo "Über 18: Nein";
	}	    

?>
</body>
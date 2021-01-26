<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Event-Handling</title>
		<link rel="stylesheet" href="_css/style.css">
		<script src="_script/main.js"></script>

	</head>
	<body>
		<h1>Registrierung:</h1>
		<main>
			<form id="eingabeFormular" action="ausgabe.php" method="GET"></p>
                <p>Vorname: <input type="text" name="vname" id="inputVname" required></p>
				<p>Nachname: <input type="text" name="name" id="inputName" required></p>
                <p>Alter: <input type="number" name="age" id="inputAge" required></p>
                <p>Geburtsdatum: <input type="date" name="date" id="inputDate"></p>
                <p>Geschlecht:</p>
				
                <select name="geschlecht" id="inputGeschlecht">
				<option value="Mann">Mann</option>
				<option value="Frau">Frau</option>
				<option value="Sonstige">Sonstige</option>
				</select>
                
				<p><label for="inputText">Warum will ich mich hier registrieren?:</label></p>
                <p><textarea id="inputText" name="Text" rows="4" cols="50">Dies ist ein Beispieltext.</textarea></p>
                <input type="checkbox" id="oldEnough" name="oldEnough" value="Ja" required>
                <label for="oldEnough"> Ich bin über 18 Jahre alt.</label><br>
				<input type="submit" value="Send">
			</form>
		</main>
	</body>
</html>
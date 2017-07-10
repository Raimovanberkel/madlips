<!DOCTYPE html>
<html>
<head>
	<title>Madlibs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="outer">
<div id="title">
<h2>Mad Libs</h2>
</div>
<div id="bar"> <a href="index.php">Er heerst paniek...</a> <a href="onkunde.php"> Onkunde </a> </div>

<h1>Er heerst paniek...</h1>

<div id="container">
<p> Er heerst paniek in het koninkrijk Alfredostan. Koning Alfred is ten einde raad en als koning Alfred ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["persoon"] ?>.</p>

<p> "<?php echo $_POST["persoon"] ?>! Het is een ramp! Het is een schande!"</p>

<p> "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>

<p> "Mijn <?php echo $_POST["huisdier"] ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["speelgoed"] ?> voor hem gekocht!"</p>

<p> "Majesteit, uw <?php echo $_POST["huisdier"] ?> komt vast vanzelf weer terug?"</p>

<p> "Ja, da's leuk en aardig, maar hoe moet ik nu in de tussentijd <?php echo $_POST["bezigheid"] ?> leren?"</p>

<p> "Maar Sire, daar kunt u toch uw <?php echo $_POST["voorwerp"] ?> voor gebruiken."</p>

<p> "<?php echo $_POST["persoon"] ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>

<p> "Mij <?php echo $_POST["verveelt"] ?>, Sire"</p>
</div>
</form>
</div>
<footer><p id="footer">Made by Raimo van Berkel</p></footer>
</body>
</html>

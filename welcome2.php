<!DOCTYPE html>
<html>
<head>
	<title>Onkunde</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="outer">
<div id="title">
<h2>Mad Libs</h2>
</div>
<div id="bar"> <a href="index.php">Er heerst paniek...</a> <a href="onkunde.php"> Onkunde </a> </div>

<h1>Onkunde</h1>

<div id="container">
<p>Er zijn veel mensen die niet kunnen <?php echo $_POST["kunnen"] ?>. Neem nou <?php echo $_POST["persoon"] ?>. Zelfs met de hulp van een <?php echo $_POST["voorwerp"] ?> of zelfs <?php echo $_POST["getal"] ?> kan <?php echo $_POST["persoon"] ?> niet <?php echo $_POST["kunnen"] ?>. Dat heeft niet temaken met een gebrek aan <?php echo $_POST["beste"] ?>, maar met een teveel aan <?php echo $_POST["slechtste"] ?>. Te veel <?php echo $_POST["slechtste"] ?> leidt tot <?php echo $_POST["ergste"] ?> en dat is niet goed als je wilt <?php echo $_POST["kunnen"] ?>. Helaas voor <?php echo $_POST["persoon"] ?>.</p>

</div>
</form>
</div>
<footer><p id="footer">Made by Raimo van Berkel</p></footer>
</body>
</html>

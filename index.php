<!DOCTYPE html>
<html>

<?php
$xml=simplexml_load_file("ideaList.xml") or die("Error: Cannot create object");
$ideaNum=rand(0,9);
?>

<head>
	<title>Coding Idea Generator</title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="main.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css"></script>
</head>

<body>
	<button onClick="window.location.reload()">Generate</button>
	<h1 id="main"><?php echo $xml->idea[$ideaNum]->main; ?></h1>
	<h2 id="desc"><?php echo $xml->idea[$ideaNum]->desc; ?></h2>
	<h3 id="bonus">Bonus: <?php echo $xml->idea[$ideaNum]->bonus; ?></h3>
	<img src= <?php echo $xml->idea[$ideaNum]->img; ?> >
</body>

</html>
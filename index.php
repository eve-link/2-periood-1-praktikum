<!DOCTYPE html>
<html>
<head>
<title>Esimene leht</title>
</head>
<body>

<a href="second_page.php?age=32">Teisele lehele</a>
<br>
<?php echo $_GET["age"] ?>
<br>

<?php 
$jada = array("eve", "22");

echo $jada[1];
?>

<?php echo "<h1>" . $_GET["name"] . "</h1>"; 
?>

</body>
</html>
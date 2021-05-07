<!-- 
Database and webserver connections
-->
<?php
$host = "localhost";
$user = "requin";
$pass = "123";
$db = "app1";

// Attempts to connect to the host network and database with locally set values.
try {
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Unable to connect catch and message.
} catch(PDOException $e) {
echo "Connection failed: Try again later" . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<title> LAMP </title>

<!-- Incorporating the style.css file for a custom look -->
<link rel="stylesheet" href="style.css" type="text/css">

</head>

<nav>
<ul>

<!-- Navigable links to other .php files -->
<li><a href="index.php">Home</a></li>
<li><a href="table.php">Table</a></li>
<li><a href="duck.php">Duck</a></li>
<li><a href="phpinfo.php">Info</a></li>

</ul>
</nav>
</br>

<center>
<heading1>
Welcome!
</heading1>
<center>

<hr>
<body>
<center>
<texti>
Adaptive Mono-Ski, Bi-Ski, 3-Track.
</texti>
</center>
</br>

<!-- Adds a picture of a Mono-Ski surrounded by a cicular frame. -->
<image1>
<img src="monoski2.jpg" alt="Mono-Ski" style=width:180px;height:180px;">
</image1>

<image1>
<img src="biski2.jpeg" alt="Mono-Ski" style="width:180px;height:180px;">
</image1>

<image1>
<img src="3track.jpg" alt="Mono-Ski" style="width:180px;height:180px;">
</image1>

</body>
</html>

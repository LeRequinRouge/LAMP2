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
Disability Table
</heading1>
</center>

<hr>
<body>

<?php

$host = "localhost";
$user = "requin";
$pass = "123";
$db = "app1";

// Establish a connection to the LAMP -- MySQL Database
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
die("Connection Failure: " . $conn->connect_error);
}

// Obtains all the data from the Adaptive table in MySQL DB app1
$sql = "SELECT Disabilities, Monoski, Biski, 3track";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo $row["Disabilities"] . $row["Monoski"] . $row["Biski"] . $row["3track"];}}
?>
</body>
</html>

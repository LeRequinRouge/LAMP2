<html>
<head>
<meta charset = "utf-8">
<title> LAMP </title>

<!-- Incorporating the style file -->
<link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>
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
PHP Info
</heading1>
<center>

<hr>
<br/>
</body>
</html>

<!-- Displays the web application configuration of the LAMP setup -->
<?php
phpinfo();
?>

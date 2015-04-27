<html>
<head>
</head>
<body>
<h1>Messages</h1>
<table>
<?php
$dir = ".";
$files = scandir($dir);
foreach ($files as $file) {
    echo "<tr><td><a href='".$file."'>".$file."</a></td></tr>";
}
?>
</table>
</body>
</html>
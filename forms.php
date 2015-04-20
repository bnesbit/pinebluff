<html>
<body>
Form handler.

<p><?php print "CONTENT_TYPE: " . $_SERVER['CONTENT_TYPE'] . "<BR />"; ?>
<p>
Post data:<?php print_r($_POST); ?>
<p>
Get data: <?php print_r($_GET); ?>

<table>
<?php 


    foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }


?>
</table>
</body>
</html>




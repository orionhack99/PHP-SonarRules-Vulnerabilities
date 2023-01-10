<html>
<body>

<h1>Welcome to my home page!</h1>
<p>Example of vunerables includes.</p>
<p></p>
<?php 
$filename = $_GET["filename"];

// bad code from accunetix web security
//include($filename)

// bad code from sonar rules
include $filename . ".php";
?>

</body>
</html> 

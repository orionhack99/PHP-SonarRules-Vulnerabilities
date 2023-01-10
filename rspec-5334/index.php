<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome the home page</h1>
    <p> Testing eval vulnerability </p>
    <?php

    $data = $_GET["data"];
    // eval bad codes
    //eval("echo \$data;");  // run xss
    eval("echo ".$data.";");  // run command injection
    //eval("echo ".$_REQUEST["data"].";") // run command injection

    ?>
</body>
</html>
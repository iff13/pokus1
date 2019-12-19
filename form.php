<?php

var_dump($_GET);

if (isset($_GET['search_term'])) {

    // vyhledat
    var_dump('HLEDAM!');


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="" method="get">

        <input type="text" name="api_key" placeholder="zadejte svůj API klíč"><br>

        <input type="text" name="search_term" placeholder="Termín">

        <input type="submit" value="Odeslat">

    </form>
    
</body>
</html>
<?php

$connection = mysqli_connect('serveurwebfofo.mysql.database.azure.com','csakji@serveurwebfofo','Paquereau711');

if (!$connection){
    echo "Connection a mysql impossible";

}

// Connection à la base football
$base = mysqli_select_db($connection, 'football');
if (!$base){
    echo "Connection a la base impossible";

}

?>

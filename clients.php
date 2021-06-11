<?php

require_once("Client.php");
require_once("ListeClients.php");

//$client = new Client ('Françis','Cabrel','La cabane au fond du jardin','Chambéry','73000');
//$client->displayClient();

echo '<br>';

$listclients = new ListeClients();
$listclients->displayListClient();
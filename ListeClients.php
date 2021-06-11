<html>

<head></head>

<body>

    <?php

    include("database.php");
    require_once("Client.php");

    class ListeClients {

        public $listingclients =[];


        public function __construct()
        {
            foreach(listingclients() as $client) {

                $client = new Client ($client['first_name'],$client['last_name'],$client['adress'],$client['city'],$client['PC']);

                array_push($this->listingclients, $client);

                //var_dump($this->listingclients);

            }

          
        }
        public function displayListClient() {

            foreach($this->listingclients as $client) {

                $client->displayClient();
            }


        }

    }

?>
</body>

</html>
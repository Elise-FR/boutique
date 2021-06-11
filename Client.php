<html>

<head></head>

<body>

    <?php

    class Client {

        public $first_name;
        public $last_name;
        public $adress;
        public $city;
        public $PC;


    

    public function __construct($first_name,$last_name,$adress,$city,$PC) {

                $this->first_name = $first_name;
                $this->last_name = $last_name;
                $this->adress = $adress;
                $this->city = $city;
                $this->PC = $PC;



    } 


public function displayClient() { ?>

<li><?php echo "Prénom : " . $this->first_name?> </li>
<li><?php echo "Nom : " . $this->last_name?> </li>
<li><?php echo "Adresse postale : " . $this->adress?></li>
<li><?php echo "Ville : " . $this->city?></li>
<li><?php echo "Code postal : " . $this->PC?> </li>

<?php echo '<br>';
 } 
 
} ?>

</body>

</html>
<?php



$db_name = "poks3207";
$dsn = "mysql:dbname=" . $db_name . ";host=localhost";
$db_user = "poks3207";
$db_pass = "viq663";

$db = new PDO($dsn, $db_user, $db_pass);


    if (isset($_GET['up'])){
        $result = $db->query("CREATE TABLE IF NOT EXISTS product( 
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
                     name VARCHAR(100) NOT NULL 
                    ) ENGINE=MyISAM
        ");

        $result = $db->query("ALTER TABLE product ADD category_id INT (11) NULL");
        echo "накатываем";

    }elseif(isset($_GET['down'])){
        echo "откатываем";
        $result = $db->query("ALTER TABLE product DROP COLUMN category_id");
        $db->query("DROP TABLE category");
    }





?>
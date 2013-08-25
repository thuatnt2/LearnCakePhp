<?php

class HelloShell extends AppShell {

    public function main() {
        $hostname = "127.0.0.1";
        $username = "root";
        $password = "Htlu@n2605";

        try {
            $db = new PDO("mysql:host=$hostname;dbname=leanphp", $username, $password);
            echo "Connected to database";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}

?>

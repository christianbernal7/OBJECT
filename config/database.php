<?php
namespace Config;

use PDO;
use PDOException;

class Database{

    private array $credential = [
        'host'          => 'localhost',
        'username'      => 'root',
        'password'      => '',
        'database_name' => 'objectdb'
    ];

    public function connect(){
        // DataSource Name
        $dsn = 'mysql:host='.$this->credential['host'].';dbname='.$this->credential['database_name'];
        
        try {
            // PDO Connection
            $pdo = new PDO(
                $dsn,
                $this->credential['username'],
                $this->credential['password']
            );

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            return $pdo; 
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }
}
?>

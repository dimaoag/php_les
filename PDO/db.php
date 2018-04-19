<?php
namespace db_connection;

class Db{
    public $driver = 'mysql';
    public $host = 'test1.loc';
    public $db_name = 'test_pdo';
    public $user = 'root';
    public $password = '1111';
    public $charset = 'utf8';
    public $options = [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION];

    public function connection(){
        try{
            return $pdo = new \PDO("$this->driver:host=$this->host;dbname=$this->db_name;charset=$this->charset", $this->user,
                $this->password,  $this->options);
        } catch (\PDOException $e){
            return die("Error, don't connection to database");
        }
    }
}





//try{
//    $pdo = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $user, $password, $options);
//} catch (PDOException $e){
//    die("Error, don't connection to database");
//}


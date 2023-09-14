<?php

namespace app\models;

class Connection
{
   public $db = 'mysql:host=127.0.0.1;dbname=cursomvc';
    public $user = 'root';
    public $pass = '';

    public function connect()
    {
        try {
            //code...
            $conn = new \PDO($this->db, $this->user, $this->pass );
            $conn->exec('set names utf8');
            return $conn;
        } catch (\PDOException $erro) {
            //throw $th;
            echo $erro->getMessage();
        }
    }
}

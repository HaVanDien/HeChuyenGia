<?php
/**
 * Created by PhpStorm.
 * User: phamphuong
 * Date: 10/09/2018
 * Time: 22:28
 */
class connect{
    private $conn;
    private $localhost = 'localhost';
    private $user_db = 'root';
    private $user_pass = 'phuongdaik@';
    private $name_db = 'test_hechuyengia';

     protected function setConnect(){
         if(!$this->conn){
             $this->conn = mysqli_connect($this->localhost,$this->user_db,$this->user_pass,$this->name_db);
             mysqli_set_charset($this->conn,'utf8');
         }
    }
    protected function disConnect(){
         if ($this->conn){
             mysqli_close($this->__conn);
         }
    }
    public function getConnect(){
         return $this->conn;
    }
}
?>


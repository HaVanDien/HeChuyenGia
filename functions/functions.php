<?php
/**
 * Created by PhpStorm.
 * User: phamphuong
 * Date: 11/09/2018
 * Time: 21:36
 */
require_once __DIR__.'/../connect.php';
class functions extends connect{
    public $sql;
    public $data;
    function __construct()
    {
        $this->setConnect();
    }
    function __destruct()
    {
        $this->disConnect();
    }

    public function insert(){
        $res = mysqli_query($this->getConnect(),$this->sql);
        if(!$res){
            return 'Lỗi insert: '.mysqli_error($this->getConnect());
        }
        return true;
    }
    public function get_all($table=array(),$column=null,$where=null){
        $table = implode(', ',$table);
        $col = $column!=null?implode(', ',$column):'*';
        $wh = '';
        if($where!=null){
            $wh = ' where ';
            foreach($where as $key=>$val){
                $wh .=$key.$val.' and ';
            }
            $wh = substr($wh,0,-4);
        }
        $this->sql = "select $col from $table $wh";
        $res = mysqli_query($this->getConnect(),$this->sql);
        if(!$res){
            return 'Lỗi select: '.mysqli_error($this->getConnect());
        }
        $this->data = [];
        while ($row = mysqli_fetch_assoc($res))
            $this->data[] = $row;
        return $this->data;
    }
}

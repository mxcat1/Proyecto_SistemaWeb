<?php
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 26/10/2018
 * Time: 19:21
 */

require_once 'config.php';

class conexion{
    protected $conexion;

    /**
     * conexion constructor.
     */
    public function __construct(){
        $this->conexion=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAMEDB);
        $this->conexion->set_charset(DB_CHARTSET);
        $this->conexion->query("SET NAMES 'utf8'");
    }

}
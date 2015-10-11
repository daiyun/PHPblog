<?php
defined('HUANGDR') or die();
require_once(SMARTY_CONFIG_DIR.'DB.config.php');
require_once(LIB_DIR.'DB/db.interface.php');
require_once(LIB_DIR.'DB/'.DB_DRIVER.'.trait.php');

class DB implements db_interface
{
    public function __construct(){
        $this->table = 'life';
        $this->contact();
    }
    use DBDriver;
} 


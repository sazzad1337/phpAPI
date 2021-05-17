<?php
class Connect extends PDO {
    public function __construct() {
        parent::__construct("mysql:host=sql301.hstn.me;dbname=mseet_28415402_api", 'mseet_28415402', '98121298',
        array(PDO::MYSQL_ATTR_INIT_COMMANT => "SET NAMES utf8"));
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
}
?>
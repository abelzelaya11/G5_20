<?php
    class conectar{
        protected $dbh;
        
        protected function Conexion(){
            try {
                $conectar = $this->dbh = new PDO("mysql:host=34.68.196.220; dbname=G5_20", "G5_20", "cyMe8YgN");
                return $conectar;
            } catch (Exception $e) {
                print "¡Error BD!: " . $e->get.message() . "<br/>";
                die();
            }
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
}
?>
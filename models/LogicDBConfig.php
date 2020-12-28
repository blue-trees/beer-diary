<!-- DBに接続 -->

<?php
    // env.php内のDB接続の為の定数を使用
    include("../config/env.php");
    
    class LogicDBConfig{
        
        private $conn;
        // beer_diaryDBに接続
        public function __construct() {
            $conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD,DB_DRIVER_OPTIONS);

            $this->conn = $conn;
        }
    }

?>
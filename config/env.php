<?php
    // DBの接続情報を定数で定義
    const DB_DSN = 'mysql:host=localhost; dbname=beer_diary; charset=utf8';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '';
    const DB_DRIVER_OPTIONS = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

?>
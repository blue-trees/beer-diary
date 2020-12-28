<?php

    session_start();
    include('../models/LogicLogin.php');

    $loginLogic = new LogicLogin;

    if(isset($_POST["login"])) {

        $password = $_POST['password'];
    
        $login = $loginLogic->loginLogic($password);

        if($login) {

            header("Location: viwes/mypage.php");

        } else {

            // index.phpにログイン失敗と表示させたいけどこれでOK?
            echo "Invalid Password!!";

        }
    }

?>
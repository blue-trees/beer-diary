<?php

    // session_start();

    include('LogicDBConfig.php');
    $conn = new LogicDBConfig;

    class LogicLogin{

        // パスワードの照合を行う
        public function loginLogic($password) {
            // パスワードをハッシュ化(新規登録機能つけた時に実装)
            // $hash_password = md5($password);

            // userテーブルからuser_passwordを取得するSQL
            $sql = 
            "SELECT user_password 
            FROM users 
            WHERE user_password = '$password'";

            $result = $conn->query($sql);

            // ログイン失敗時
            // $resultの判定はnum_rowsでOK?
            if($result->num_rows <= 0) {

                return false;

            // ログイン成功時
            }else {

                $row = $result->fetch_assoc();

                // セッションを取得
                $_SESSION['user_id'] = $row['user_id'];

                return true;
                
                }
            }
            
        }


?>
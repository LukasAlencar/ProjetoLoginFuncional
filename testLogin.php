<?php

    if(isset($_POST['submit']) && !empty($_POST['userEmail']) && !empty($_POST['userPassword'])){
        include_once('config.php');

        $userEmail = $_POST['userEmail'];
        $userPassword = $_POST['userPassword'];
        
        $sql = "SELECT * FROM $users WHERE userEmail = '$userEmail' AND userPassword = '$userPassword'";
        $result = $conexao->query($sql);

        if(mysqli-num-rows($result) < 1){
            print_r("não existe");
        }else{
            print_r("existe");
        }

    }else{
        header('Location: login.php');
    }

?>
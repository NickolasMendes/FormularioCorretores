<?php

    include_once('config.php');

    if(isset($_POST['update'])){

        $id = $_POST['id'];
        $cpf = $_POST['txtCpf'];
        $creci = $_POST['txtCreci'];
        $nome = $_POST['txtNome'];

        $sqlUpdate = "UPDATE corretores SET cpf='$cpf', creci='$creci', nome='$nome' WHERE idcorretores='$id'";

        $result = $conexao->query($sqlUpdate);

    }
    header('Location: formulario.php');
    

    
?>
<?php 
    
    if(!empty($_GET['idcorretores']))
    {
        include_once('config.php');

        $id = $_GET['idcorretores'];

        $select = "SELECT * FROM corretores WHERE idcorretores=$id";

        $result = $conexao->query($select);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM corretores WHERE idcorretores='$id'";
            $resultDelete = $conexao->query($sqlDelete);
        }

    }
    header('Location: formulario.php');
    
?>
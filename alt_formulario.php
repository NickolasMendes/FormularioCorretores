<?php 
    
    if(!empty($_GET['idcorretores']))
    {
        include_once('config.php');

        $id = $_GET['idcorretores'];

        $select = "SELECT * FROM corretores WHERE idcorretores=$id";

        $result = $conexao->query($select);

            if($result->num_rows > 0){
                while($user_data = mysqli_fetch_assoc($result)){
        
                    $cpf = $user_data['cpf'];
                    $creci = $user_data['creci'];
                    $nome = $user_data['nome'];

                }
            }

    }
    else{
        header('Location: formulario.php');
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" media="screen" />


    <title>Alterando Corretor</title>
</head>
<body>
    <a href="javascript:history.back()"><input type="submit" class="btn_voltar" value="Voltar"></a>
        <div class="box">
            <form action="alt_save.php" method="POST">
                <fieldset>
                    <h2>Alterar Corretor</h2>
                    <input type="hidden" name="id" value="<?=$id;?>" >
                    <div>
                        <label class="CampoName" for="cpf">CPF:</label>
                        <input type="text" id="cpf" name="txtCpf" maxlength="11" value="<?=$cpf;?>" class="inputCad" required>
                    </div>
                    <div>
                    </br>
                        <label class="CampoName" for="cresi">CRECI:</label>
                        <input type="text" id="txtCreci" name="txtCreci" minlength="2" value="<?=$creci;?>" class="inputCad" required>
                    </div>
                    <div>
                    </br>
                        <label class="CampoName" for="nome">Nome:</label>
                        <input type="text" id="txtNome" name="txtNome" maxlength="100" value="<?=$nome;?>" class="inputCad" required>
                    </div>
                    <div>
                    </br>
                        <input type="submit" id="update" name="update" class="inputButton" value="Salvar">
                    </div>
                </fieldset>    
                            </br>
            </form>                
        </div>
    
</body>
</html>
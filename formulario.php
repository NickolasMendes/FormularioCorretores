<?php 
    
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $cpf = $_POST['txtCpf'];
        $creci = $_POST['txtCreci'];
        $nome = $_POST['txtNome'];

        $result = mysqli_query($conexao, "INSERT INTO corretores(cpf,creci,nome) VALUES ('$cpf','$creci','$nome')");

    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" media="screen" />


    <title>Formulário</title>
</head>
<body>
        <div class="box">
            <form action="formulario.php" method="POST">
                <fieldset>
                    <h2>Cadastro de Corretor</h2>
                    <div>
                        <label class="CampoName" for="cpf">CPF:</label>
                        <input type="text" id="cpf" name="txtCpf" maxlength="11" minlength="2" value="" class="inputCad" required>
                    </div>
                    <div>
                    </br>
                        <label class="CampoName" for="cresi">CRECI:</label>
                        <input type="text" id="txtCreci" name="txtCreci" minlength="2" value="" class="inputCad" required>
                    </div>
                    <div>
                    </br>
                        <label class="CampoName" for="nome">Nome:</label>
                        <input type="text" id="txtNome" name="txtNome" maxlength="100" value="" class="inputCad" required>
                    </div>
                    <div>
                    </br>
                        <input type="submit" id="submit" name="submit" class="inputButton" value="Enviar">
                    </div>
                </fieldset>    
                            </br>
            </form>                
        </div>

        <div class="DivTable">
            <table class="table">
                    <tr class='TableTR'>
                        <th>ID</th>
                        <th>CPF</th>
                        <th>CRECI</th>
                        <th>NOME</th>
                        <th>AÇÕES</th>
                    </tr>
                   <?php  
                        $sql = "SELECT * FROM corretores ORDER BY idcorretores DESC";
                        include_once('config.php');
                        $result = $conexao->query($sql);

                        while($user_data = mysqli_fetch_assoc($result))
                            {
                                echo "<tr class='TRdados'>";
                                echo "<td>" .$user_data['idcorretores']. "</td>";
                                echo "<td>" .$user_data['cpf']. "</td>";
                                echo "<td>" .$user_data['creci']. "</td>";
                                echo "<td>" .$user_data['nome']. "</td>";
                                echo "<td>
                                        <a class='bnt_alt' href='alt_formulario.php?idcorretores=$user_data[idcorretores]'>
                                        
                                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                            </svg> 
                                        </a>
                                        <a class='bnt_del' href='delete.php?idcorretores=$user_data[idcorretores]'>
                                        
                                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bibi-trash3-fill' viewBox='0 0 16 16'>
                                            <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                                            </svg>
                                        </a>
                                    </td>";
                                echo "</tr>";
                            }
                    ?>
            </table>
        </div>

            
        
    
</body>
</html>
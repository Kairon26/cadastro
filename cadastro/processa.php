<?php
include_once("conexao.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$nasci = $_POST['nasci'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];

$sql="insert into usuario (nome,cpf,nasci,email,celular,cep,endereco) values ('$nome','$cpf','$nasci','$email','$celular','$cep','$endereco')";
$salvar = mysqli_query($conexao,$sql);

$linhas=mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        
        <title></title>
        
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div class="container">
            <nav>
                <ul class="menu">
                    <a href="index.php"><li>Cadastro</li></a>
                        <a href="consultas.php"><li>Consultas</li></a>
                </ul>
            </nav>
            <section>
                <h1>Confirmação de Cadastro</h1>
                <hr><br><br>  
                
                <?php
                if($linhas == 1){
                    print"Cadastro efetuado com sucesso!";
                }else{
                    print"Cadastro Não efetuado.<br>Já existe um usuário com este email!";
                }
            
                
                
                ?>
            </section>
        </div>
</body>
</html>
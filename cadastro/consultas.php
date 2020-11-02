<?php
include_once("conexao.php");

$filtro=isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from usuario where nome like'%$filtro%'";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);




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
                <h1>Consultas</h1>
                <hr><br><br>  
                
         
                     
                    
         
                
                <?php
                
                print "$registros registros encontrados.";
                print "<br><br>";
                
                while($exibirRegistros = mysqli_fetch_array($consulta)){
                    $codigo= $exibirRegistros[0];
                    $nome = $exibirRegistros[1];
                    $cpf = $exibirRegistros[2];
                    $nasci = $exibirRegistros[3];
                    $email = $exibirRegistros[4];
                    $celular = $exibirRegistros[5];
                    $cep = $exibirRegistros[6];
                    $endereco = $exibirRegistros[7];
                    
                    print"<article>";
                    
                    print "$codigo<br>";
                    print "$nome<br>";
                    print "$cpf<br>";
                    print "$nasci<br>";
                    print "$email<br>";
                    print "$celular<br>";
                    print "$cep<br>";
                    print "$endereco";
                    
                    print"</article>";
                }
            
                mysqli_close($conexao);
                
                ?>
            </section>
        </div>
</body>
</html>
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
                <h1>Cadastro de Usuários</h1>
                <hr><br><br>
                
                <form method="post" action="processa.php">
                    <input type="submit" value="salvar" class="btn">
                    <input type="reset" value="limpar" class="btn">
                    <br><br>
                    
                    Nome<br>
                    <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
                    CPF<br>
                    <input type="text" name="cpf" class="campo" maxlength="20" required><br>
                    Data de nascimento<br>
                    <input type="date"  name="nasci" class="campo" maxlength="10" required><br>
                    Email<br>
                    <input type="email" name="email" class="campo" maxlength="50" required><br>
                    Telefone<br>
                    <input type="text" name="celular" class="campo" maxlength="20" required ><br>
                    CEP<br>
                    <input type="text" name="cep" class="campo" maxlength="9" required><br>
                    Endereço<br>
                    <input type="text" name="endereco" class="campo" maxlength="50" required><br>
                </form>
                
            </section>
        </div>
</body>
</html>
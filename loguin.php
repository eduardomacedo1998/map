<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styleLoguin.css">
</head>

<body>

    <form action="./loguin.php" method="POST">

    <H2 class="titulo">loguin de usuario</H2>
      
    <span>Usuario</span>
    <input type="text" id="usuarios" name="usuarios" required>   <br>


    <span>Senha</span>
    <input type="text" id="senha" name="senha" required>


    <button type="submit">ENTRAR</button>

                                                 

    </form>



    <?php

    include_once "./class.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // O formulário foi enviado

    // Verificar se os campos de usuário e senha foram preenchidos
    if (isset($_POST['usuarios']) && isset($_POST['senha'])) {
        // Os campos de usuário e senha foram preenchidos

        // Faça o que for necessário com os dados aqui
        $usuario = $_POST['usuarios'];
        $senha = $_POST['senha'];
     
        $dadosuser = new Database("localhost", "root", "", "produtos");

        $usuarioLogado = $dadosuser->selectLoguin("usuarios",$usuario,$senha);


     
    }
}
?>

</body>
</html>
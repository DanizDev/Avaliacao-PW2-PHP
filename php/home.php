<?php
session_start(); // Inicia a sessão

if (isset($_SESSION['usuario'])) {
    echo "Bem-vindo, " . $_SESSION['usuario'] . "!";
} else {
    echo "Usuário não autenticado.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link rel="stylesheet" type="text/css" href="../css/home.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                   <h1>Vendas Online</h1>
                </div>

                <ul>
                    <li><a href="../html/home.html" id="btn">Home</a></li>
                    <li><a href="../cadastroProduto.html" id="btn">Cadastro Produto</a></li>
                    <li><a href="#" id="btn">Sobre</a></li>
                    <li><a href="#" id="btn">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

</body>
</html>
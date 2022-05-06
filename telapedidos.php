<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>
    <h1>Cadastro de Pedidos<h1>
 <form action="cadastropedidos.php" method="post">
    produtos:<input name="produto" id="produto">
<br>
    Total:<input name="total" id="total">
    <br>
    Observações:
    <textarea name="observacoes" id="observacoes" ></textarea><br>
    Entrega ou retirada?<input name="envio" id="envio">
    <br>
    Informações do cliente:<br>
    <textarea name="info" id="info" ></textarea ><br>
    <button type="submit">Salvar</button>
</form>
</body>
</html>
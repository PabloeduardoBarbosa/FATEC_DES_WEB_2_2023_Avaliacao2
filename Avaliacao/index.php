<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
      form div {
        display: flex;
        flex-direction: column;
        gap: 10px;
        align-items: flex-start;
      }
    </style>
</head>
<body>

    <form action="inserir.php" method="POST">
        <div>
            <label for="nome" name="nome">Nome</label>
            <input type="text" name="nome" placeholder="nome">
            <label for="documento" name="nome">Documento</label>
            <input type="text" name="documento" placeholder="documento">
            <label for="telefone" name="telefone">Telefone</label>
            <input type="text" name="telefone" placeholder="telefone">
            <label for="escolaridade" name="escolaridade">Escolaridade</label>
            <input type="text" name="escolaridade" placeholder="escolaridade">
        </div>
        <button type="submit">Mandar</button>
    </form>
    
</body>
</html>

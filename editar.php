<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Seleção</title>
</head>
<body>
    <h1>Editar Seleção ✏️</h1>

    <form method="POST" action="index.php?acao=editar">
        
        <input type="hidden" name="id" value="<?php echo $dadosSelecao['id']; ?>">
        
        <label>Nome da Seleção:</label>
        <input type="text" name="nome" value="<?php echo $dadosSelecao['nome']; ?>" required>
        <br><br>
        
        <label>Grupo:</label>
        <input type="text" name="grupo" maxlength="1" value="<?php echo $dadosSelecao['grupo']; ?>" required>
        <br><br>
        
        <button type="submit">Salvar Alterações</button>
        
        <br><br>
        <a href="index.php">⬅️ Voltar para a lista</a>
    </form>
</body>
</html>
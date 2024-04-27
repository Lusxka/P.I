<?php
session_start();
require_once('conexao.php');

if(!isset($_SESSION['admin_logado'])){ //se nao existeir um adm logado, vamos direcionar ele para pagina de login
    header('Location:login.php');
    exit(); 
}

$message = '';

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    try{
        $stmt = $pdo->prepare("DELETE FROM PRODUTO_ESTOQUE WHERE PRODUTO_ID = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $stmt = $pdo->prepare("DELETE FROM PRODUTO_IMAGEM WHERE PRODUTO_ID = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $stmt = $pdo->prepare("DELETE FROM PRODUTO WHERE PRODUTO_ID = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $message = "<p style='color:green;'>Produto excluído com sucesso!</p>";
        }else{
            $message = "Erro ao excluir o produto!";
    }
} catch (PDOException $e){
    $message = "<p style='color:red;'>Erro: ". $e->getMessage();"</p>";
}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Produto</title>
</head>
<body>
    <h2>Excluir Produtos</h2>
    <p><?php echo $message; ?></p>
    <a href="listar_produtos.php">Voltar à Lista de Produtos</a>
</body>
</html>
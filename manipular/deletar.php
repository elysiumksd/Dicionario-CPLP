<?php
include 'conexao.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM dicionario WHERE id=$id";

    if ($conexao->query($sql) === TRUE) {
        echo '<script>alert("sucesso.");</script>';
            header("Location: topo.html");
    } else {
        echo "Erro ao deletar registro: " . $conexao->error;
    }
} else {
    echo "ID do registro não especificado.";
}

$conexao->close();
?>

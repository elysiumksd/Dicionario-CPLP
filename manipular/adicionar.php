<?php
// Incluir o arquivo de conexão com o banco de dados
include 'conexao.php';

// Recuperar os dados do formulário
$termo = $_POST['termo'];
$classe_gramatical = $_POST['classe_gramatical'];
$de = $_POST['de'];
$imagem = $_POST['imagem'];
$divisao = $_POST['divisao'];
$abreviatura = $_POST['abreviatura'];
$abreviaturaingles = $_POST['abreviaturaingles'];
$abreviaturaespanhol = $_POST['abreviaturaespanhol'];
$abreviaturafrances = $_POST['abreviaturafrances'];
$sinonimos = $_POST['sinonimos'];
$relacionado1 = $_POST['relacionado1'];
$relacionado2 = $_POST['relacionado2'];
$relacionado3 = $_POST['relacionado3'];
$relacionado4 = $_POST['relacionado4'];
$angola = $_POST['angola'];
$brasil = $_POST['brasil'];
$cabo = $_POST['cabo'];
$equatorial = $_POST['equatorial'];
$bissau = $_POST['bissau'];
$moçambique = $_POST['moçambique'];
$portugal = $_POST['portugal'];
$tome = $_POST['tome'];
$timor = $_POST['timor'];
$definicao1 = $_POST['definicao1'];
$definicao2 = $_POST['definicao2'];
$definicao3 = $_POST['definicao3'];

// Construir a query SQL para inserir os dados
$sql = "INSERT INTO dicionario (termo, classe_gramatical, de, imagem, divisao, abreviatura, abreviaturaingles, abreviaturaespanhol, abreviaturafrances, sinonimos, relacionado1, relacionado2, relacionado3, relacionado4, angola, brasil, cabo, equatorial, bissau, moçambique, portugal, tome, timor, definicao1, definicao2, definicao3) VALUES ('$termo', '$classe_gramatical', '$de', '$imagem', '$divisao', '$abreviatura', '$abreviaturaingles', '$abreviaturaespanhol', '$abreviaturafrances', '$sinonimos', '$relacionado1', '$relacionado2', '$relacionado3', '$relacionado4', '$angola', '$brasil', '$cabo', '$equatorial', '$bissau', '$moçambique', '$portugal', '$tome', '$timor', '$definicao1', '$definicao2', '$definicao3')";

// Executar a query SQL
if ($conexao->query($sql) === TRUE) {
    // Redirecionar para uma página de sucesso ou exibir uma mensagem de sucesso
    echo '<script>alert("Termo adicionado com sucesso.");</script>';
    header("Location: topo.html");
} else {
    // Se houver algum erro, exibir uma mensagem de erro
    echo "Erro ao adicionar termo: " . $conexao->error;
}

// Fechar a conexão com o banco de dados
$conexao->close();
?>

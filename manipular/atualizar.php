<?php
include 'conexao.php';
$id = $_POST['id'];
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

$sql = "UPDATE dicionario SET termo='$termo', classe_gramatical='$classe_gramatical', de='$de', imagem='$imagem', divisao='$divisao', abreviatura='$abreviatura', abreviaturaingles='$abreviaturaingles', abreviaturaespanhol='$abreviaturaespanhol', abreviaturafrances='$abreviaturafrances', sinonimos='$sinonimos', relacionado1='$relacionado1', relacionado2='$relacionado2', relacionado3='$relacionado3', relacionado4='$relacionado4', angola='$angola', brasil='$brasil', cabo='$cabo', equatorial='$equatorial', bissau='$bissau', moçambique='$moçambique', portugal='$portugal', tome='$tome', timor='$timor', definicao1='$definicao1', definicao2='$definicao2', definicao3='$definicao3' WHERE id=$id";

if ($conexao->query($sql) === TRUE) {
    echo '<script>alert("Sucesso.");</script>';
    header("Location: topo.html");
} else {
    echo "Erro ao atualizar registro: " . $conexao->error;
}

$conexao->close();
?>

<?php
include 'conexao.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Buscar os dados do registro a ser editado
    $sql = "SELECT * FROM dicionario WHERE id=$id";
    $result = $conexao->query($sql);
    
    if($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $termo = $row['termo'];
        $classe_gramatical = $row['classe_gramatical'];
        $de = $row['de'];
        $imagem = $row['imagem'];
        $divisao = $row['divisao'];
        $abreviatura = $row['abreviatura'];
        $abreviaturaingles = $row['abreviaturaingles'];
        $abreviaturaespanhol = $row['abreviaturaespanhol'];
        $abreviaturafrances = $row['abreviaturafrances'];
        $sinonimos = $row['sinonimos'];
        $relacionado1 = $row['relacionado1'];
        $relacionado2 = $row['relacionado2'];
        $relacionado3 = $row['relacionado3'];
        $relacionado4 = $row['relacionado4'];
        $angola = $row['angola'];
        $brasil = $row['brasil'];
        $cabo = $row['cabo'];
        $equatorial = $row['equatorial'];
        $bissau = $row['bissau'];
        $moçambique = $row['moçambique'];
        $portugal = $row['portugal'];
        $tome = $row['tome'];
        $timor = $row['timor'];
        $definicao1 = $row['definicao1'];
        $definicao2 = $row['definicao2'];
        $definicao3 = $row['definicao3'];
    } else {
        echo "Registro não encontrado.";
        exit();
    }
} else {
    echo "ID do registro não especificado.";
    exit();
}

$conexao->close();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro</title>
    <style>
        .cabeça{
            text-align: center;
            background-color: #065ac7;
      box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.20);
      width: 100%;
        } 
        body{
            background-color: #6eb8f5;
            font-family: Arial, Helvetica, sans-serif;
            text-align: justify;
            color: white;            
            margin: 0;
    padding: 0;
        }
        input[type="text"]{
margin-left: +200px;
width: 500px;
padding: 10px;
margin: 5px 0;
border: 1px solid #ccc;
border-radius: 3px;
}
button{
    background-color: #2196f3;
    color: #fff;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
    cursor: pointer;
    margin-left: +290px;
  }
  form{
    margin-left: +290px;
  }
    </style>
</head>
<body>
<div class="cabeça">
          
          <img src="cplp logo.png" alt="" width="130">
          <h1 style="font-size: 22px;">Dicionário Digital Plurilingue da Educação e Formação <br> da Comunidade dos Países de Língua Portuguesa</h1>
          </div> 
     <center><h1>Editar Registro</h1></center>
    <!-- Formulário para editar dados -->
    <form action="atualizar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Termo: <input type="text" name="termo" value="<?php echo $termo; ?>"><br>
        Classe Gramatical: <input type="text" name="classe_gramatical" value="<?php echo $classe_gramatical; ?>"><br>
        De: <input type="text" name="de" value="<?php echo $de; ?>"><br>
        Imagem: <input type="text" name="imagem" value="<?php echo $imagem; ?>"><br>
        Divisao: <input type="text" name="divisao" value="<?php echo $divisao; ?>"><br>
        Abreviatura: <input type="text" name="abreviatura" value="<?php echo $abreviatura; ?>"><br>
        Abreviatura em Inglês: <input type="text" name="abreviaturaingles" value="<?php echo $abreviaturaingles; ?>"><br>
        Abreviatura em Espanhol: <input type="text" name="abreviaturaespanhol" value="<?php echo $abreviaturaespanhol; ?>"><br>
        Abreviatura em Francês: <input type="text" name="abreviaturafrances" value="<?php echo $abreviaturafrances; ?>"><br>
        Sinônimos: <input type="text" name="sinonimos" value="<?php echo $sinonimos; ?>"><br>
        Relacionado 1: <input type="text" name="relacionado1" value="<?php echo $relacionado1; ?>"><br>
        Relacionado 2: <input type="text" name="relacionado2" value="<?php echo $relacionado2; ?>"><br>
        Relacionado 3: <input type="text" name="relacionado3" value="<?php echo $relacionado3; ?>"><br>
        Relacionado 4: <input type="text" name="relacionado4" value="<?php echo $relacionado4; ?>"><br>
        Angola: <input type="text" name="angola" value="<?php echo $angola; ?>"><br>
        Brasil: <input type="text" name="brasil" value="<?php echo $brasil; ?>"><br>
        Cabo: <input type="text" name="cabo" value="<?php echo $cabo; ?>"><br>
        Equatorial: <input type="text" name="equatorial" value="<?php echo $equatorial; ?>"><br>
        Bissau: <input type="text" name="bissau" value="<?php echo $bissau; ?>"><br>
        Moçambique: <input type="text" name="moçambique" value="<?php echo $moçambique; ?>"><br>
        Portugal: <input type="text" name="portugal" value="<?php echo $portugal; ?>"><br>
        Tome: <input type="text" name="tome" value="<?php echo $tome; ?>"><br>
        Timor: <input type="text" name="timor" value="<?php echo $timor; ?>"><br>
        Definição 1: <input type="text" name="definicao1" value="<?php echo $definicao1; ?>"><br>
        Definição 2: <input type="text" name="definicao2" value="<?php echo $definicao2; ?>"><br>
        Definição 3: <input type="text" name="definicao3" value="<?php echo $definicao3; ?>"><br>
         <button>Enviar</button>
    </form>
</body>
</html>

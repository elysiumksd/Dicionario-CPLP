<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require("config.php");

$query = "SELECT * FROM dicionario ORDER BY RAND() LIMIT 1";
$result = mysqli_query($conexao, $query);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
       



        echo '<div class="term">';
        echo '<h2>' . $row['termo'] . '</h2>';
        echo '<p><strong id="ff2">Classe Gramatical:</strong> ' . $row['classe_gramatical'] . '</p>';
        echo '<p >Ing.<strong>:</strong> '. $row['abreviaturaingles'] .'</p> ';
                echo '<p >Es.<strong>: </strong>'. $row['abreviaturaespanhol'] .'</p> ';
                echo '<p >Fr.<strong>: </strong>'.'&nbsp;'. $row['abreviaturafrances'] .'</p> ';
     
        echo '</div>';
    }
} else {
    echo "Nenhuma palavra do dia encontrada.";
}

mysqli_close($conexao);
?>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    require("config.php");

    if (isset($_GET['termo'])) {
        $termo = $_GET['termo'];

        // Conecte ao banco de dados
        require 'config.php';

        $termo = mysqli_real_escape_string($conexao, $termo); // Evita SQL injection

        $query = "SELECT * FROM dicionario WHERE termo LIKE '%$termo%'";
        $result = mysqli_query($conexao, $query);

        // Verifique se houve resultados
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                echo '<!DOCTYPE html>';
                echo '<html lang="en">';
                echo '<head>';
                echo '<meta charset="UTF-8">';
                echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
                echo '<title>Sua Página</title>';
                echo '<style>';
                echo ' 
                .term2{
                    margin-right: auto; 
                    margin-left: 890px; /* Remova o sinal de "+" */
                    width: 300px;
                    text-align: justify;
                    border-radius: 15px;
                    border: 2px solid #2196f3; /* Altere para o código hexadecimal para preto (#000) */
                    padding: 10px;
                    box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.40);
                    margin-top: -1550px;
                } 
                            
                
                .paises{
                    margin-right: auto; 
                    margin-left: 890px; /* Remova o sinal de "+" */
                    width: 300px;
                    text-align: justify;
                    border-radius: 15px;
                    border: 2px solid #2196f3; /* Altere para o código hexadecimal para preto (#000) */
                    padding: 10px;
                    box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.40);
                    margin-top: +30px;
                } 

            .word-of-the-day {
                display: none;
            }
            #ue{
                margin-top: -25px;
                margin-left: +30px; 
              }

                #centro{
                    margin-top: -0px;
                  }'; // Adicione os estilos desejados aqui
                echo '</style>';
                echo '</head>';
                echo '<body>';
        
               
                echo '<div id="centro">';
                echo '<div id="um">';
                echo '<form action=""><br><br>';
                echo '<h3 id="termo">' . $row['termo'] . '</h3><br>';
                
                // Exibir imagem se existir
                
                
                echo '<p class="vertical-bar1"></p>';
                echo '<div id="abaixo">';
                echo ' <p id="pronuncia2">Etimologia</p>';
                echo '<br><br> <p id="pronuncia">Divisão Silábica</p>';
                
                echo '</div>';
                echo ' <div id="abaixo1">';
                echo '<p>' . $row['classe_gramatical'] . '</p>';
                echo '<br><p>' . $row['de'] . '</p>';
                echo '<p> '. $row['divisao'].' </p>';
                echo '</div>';
                echo '<div class="vertical-bar2"></div>';
                echo '<h3 id="equivalente">Equivalente</h3>';
                echo '<div id="equi"><p id="abaixo2">Ing.<strong>:</strong> '. $row['abreviaturaingles'] .'</p> ';
                echo '<p id="abaixo3"><br>Es.<strong>: </strong>'. $row['abreviaturaespanhol'] .'</p> ';
                echo '<p id="abaixo4">Fr.<strong>: </strong>'.'&nbsp;'. $row['abreviaturafrances'] .'</p> </div>';
              
                
                echo '</form>';
                echo '</div>';
                echo '<br><h3>Domínio: Educação</h3>';
                echo '<div id="um">';
                
                echo '<br> <br> <p class="vertical-bar3"></p>';
                echo '<p id="ump">' . $row['definicao1'] . '</p><br>';
                echo '<br><div class="vertical-bar5"></div>';
                echo '<strong><p id="contexto1">' . $row['contexto1'] . '</p></strong><br>';
                echo '<p> ' . $row['definicao2'] . '</p>';
                echo '<br><div class="vertical-bar5"></div>';
                echo '<strong><p id="contexto1">' . $row['contexto2'] . '</p></strong> <br>';
                echo '<strong><p id="dominio2">Imagem</p></strong> <br>';
                
                    if (!empty($row['imagem'])) {
                        echo '<img src="' . $row['imagem'] . '" style="width: 480px; height: 120px; object-fit: cover;">';
                    }
    
                 
                
                echo ' <br> <br>  <br> <br><p class="vertical-bar4"></p> ';
                echo '<p id="ump2">' . $row['definicao3'] . '</p><br>';
                echo '<br><div class="vertical-bar5"></div>';
                echo ' <strong><p id="contexto1">' . $row['contexto3'] . '</p></strong><br>';
                 echo '</div>';
                echo '<br> <br>';
                echo '</div>';

                echo '<div class="term2">  <center> <h2> Termos relacionados</h2></center>';
                echo '<strong><p >' . $row['relacionado1'] . '</p></strong>';
                echo '<strong><p >' . $row['relacionado2'] . '</p></strong>';
                echo '<strong><p >' . $row['relacionado3'] . '</p></strong>';
                echo '<strong><p >' . $row['relacionado4'] . '</p></strong></div>  ';
               
                
                echo '<div class="paises">  <center> <h2> Variação linguística </h2></center>';
                echo '<img src="angola.png" alt="" width="25" height="25"><p id="ue"><strong >Angola : ' . $row['angola'] . '</p></strong>';
                echo '<img src="brasil.png" alt="" width="25" height="25"><p id="ue"><strong id="paises">Brasil : ' . $row['brasil'] . '</p></strong>';
                echo '<img src="cabo verde.png" alt="" width="25" height="25"><p id="ue"><strong>Cabo Verde : ' . $row['cabo'] . '</p></strong>';
                echo '<img src="equatorial.png" alt="" width="25" height="25" ><p id="ue"><strong>Guiné Equatorial : ' . $row['equatorial'] . '</p></strong>';
                echo '<img src="guine.png" alt="" width="25" height="25"><strong> <p id="ue"> Guiné-Bissau : ' . $row['bissau'] . '</p></strong>';
                echo '<img src="moçanbique.png" alt="" width="25" height="25"><p id="ue"><strong>Moçambique : ' . $row['moçambique'] . '</p></strong>';
                echo '<img src="portugal.png" alt="" width="25" height="25"><p id="ue"><strong>Portugal : ' . $row['portugal'] . '</p></strong>';

                echo '<img src="sao.jpg" alt="" width="25" height="25"><p id="ue"><strong>São Tomé e Príncipe : ' . $row['tome'] . '</p></strong>';
                echo '<img src="timor.png" alt="" width="25" height="25"><p id="ue"><strong>Timor-Leste : ' . $row['timor'] . '</p></strong>';

            } 
            echo '</div>';
            echo '</div>';
        
            
        
           
        } else {
             echo '<center id="err"><p>Nenhum resultado encontrado para o termo: ' . $termo ." </p></center>";
            
             }

        // Feche a conexão com o banco de dados
        mysqli_close($conexao);
    }
}
?>

</body>
</html>


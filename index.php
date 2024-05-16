<!DOCTYPE html>
<html><head>
    <title>Dicionário</title>
    <style>
   
        #audio{
            width: 450px;
   display: inline-block; 
   margin-top: +20px;
        }
        #pronuncia{
            margin-top: -30px;
        }
        h3{
            margin-top: +10px;
        }
        #pronuncia2{
            margin-top: -70px;
        }
        body{
            background-color: #6eb8f5;
            font-family: Arial, Helvetica, sans-serif;
            text-align: justify;
            color: white;            
            margin: 0;
    padding: 0;
        }
            .word-of-the-day {
    margin-right: auto; 
    margin-left: 890px; /* Remova o sinal de "+" */
    width: 300px;
    text-align: justify;
    border-radius: 15px;
    border: 2px solid #2196f3; /* Altere para o código hexadecimal para preto (#000) */
    padding: 10px;
    box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.40);
    margin-top: 0px;
}
        .cabeça{
            text-align: center;
            background-color: #065ac7;
      box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.20);
      width: 100%;
        } 
#logo {
  animation: spin 10s linear infinite;
}

@keyframes spin {
  from {
      transform: rotate(0deg);
  }
  to {
      transform: rotate(360deg);
  }
}

.barra-inferior {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 10px;
      width: 100%;
      margin-bottom: -115px;
      margin-right: +20px;
      margin-left: -20px;
      box-shadow: 0 1rem 1rem rgba(0, 0, 0, 10);
    }
    .vertical-bar1 {
            background-color: #333;
            width: 2px; /* Largura da barra */
            height: 20vh; 
            margin-left: +134px;
            margin-top: -65px;
            word-wrap: break-word;
        }
        .vertical-bar2 {
            background-color: #333;
            width: 2px; /* Largura da barra */
            height: 20vh; 
            margin-left: +340px;
            margin-top: -145px;
            word-wrap: break-word;
        }
        .vertical-bar3 {
            background-color: #333;
            width: 6px; /* Largura da barra */
            height: 8vh; 
            margin-left: -20px;
            margin-top: -70px;
            
        }
        .vertical-bar4 {
            background-color: #333;
            width: 6px; /* Largura da barra */
            height: 8vh; 
            margin-left: -20px;
            margin-top: -36px;
        }
        .vertical-bar5 {
            background-color: #6eb8f5;
            width: 6px; /* Largura da barra */
            height: 8vh; 
            margin-left: -20px;
            margin-top: -20px;           
        }
    #dominio{
        margin-left: +120px;
        margin-top: -20px;
    }
#abaixo{
margin-top: -30px;
}
#equi{
margin-top: +70px;
margin-left: -10px;
}

#abaixo1{
    margin-left: +150px;
    margin-top: -140px;
}

#abaixo2{
    margin-left: +360px;
    margin-top: -50px;
}

#abaixo3{
    margin-left: +360px;
    margin-top: -10px;
}

#abaixo4{
    margin-left: +360px;
    margin-top: -5px;
}
     #centro{
       margin-top: +80px;
       margin-left: +100px;
     }
     #um{   
        border-radius: 15px;
    border: 2px solid whitesmoke; /* Altere para o código hexadecimal para preto (#000) */
    padding: 50px;
    width: 470px;
    box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.40);
    
     }
     #ump{
        margin-top: -60px;
     }
     #ump2{
        margin-top: -60px;
     }
     #botao{
        width: 600px;
        padding: 10px;
        border-radius: 7px;
        border-color: whitesmoke;
        margin-left: -10px;
    }
     #botao1{
        padding: 10px;
        border-radius: 7px;
        border-color: whitesmoke;
        margin-right: -90px;
     }
     #centro{
        border-radius: 15px;
    border: 2px solid whitesmoke; /* Altere para o código hexadecimal para preto (#000) */
    padding: 80px;
    width: 550px;
    box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.40);
    margin-top: -470px;
display: block;
background-color: white;
color: black;
     }
     form{
        margin-top: -60px;
        margin-left: -10px;
     }
     .pesquisa{
        margin-top: +80px;
        margin-left: +120px;
     }
  
#contexto1{
    margin-top: -40px;
}
#equivalente{
    margin-left: +350px;
    margin-top: -130px;
}
@media screen and (max-width: 393px){
  
}


    </style>
</head>
<body>
   
<div class="cabeça">
          
            <img src="cplp logo.png" alt="" width="130">
            <h1 style="font-size: 22px;">Dicionário Digital Plurilingue da Educação e Formação <br> da Comunidade dos Países de Língua Portuguesa</h1>
            </div>      
 
    <div class="container">
              
    
         <!-- Formulário de Pesquisa -->
         <form action="" method="get" >
            <div class="pesquisa">
                        <input type="text" name="termo" id="botao" placeholder="Pesquisar termo">
                 <input type="submit" value="Pesquisar" id="botao1"> <br>
            </div>
            </form>
            <br> 
        <!-- Palavra do Dia -->
        <div class="azul">
        <br>
        <div class="word-of-the-day">
            <center><h2 id="ff2">Termo do dia</h2></center>
            <?php include("word_of_the_day.php"); ?>
        </div>

        </div>
        
       

        <!-- Resultados da Pesquisa -->
        <div class="search-results">
            <?php include("search.php"); ?>
        </div>
        </div>
        <br> <br> <br>
       
    
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Programação PHP</title>

    <style type="text/css">
        .formulario{
            background-color: rgba(128,128,128, 1.0);
            color: rgba(255,255,255,1.0);
            text-shadow: 2px 2px rgba(0, 0, 0, 1.0);
            padding: 10px;
            font-size: 1.9rem;
            font-weight: bold;
        }

        input{
            font-size: 1.7rem;
            padding: 4px;
            border-radius: 0.5rem;
            border: solid;
            font-weight: bold;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        h2{
            text-align: left;
        }

    </style>
</head>

<body>
    
    <header>
        <h3>PROGRAMAÇÃO PHP</h3>
        <h4>TREINAMENTOS DO FÃO</h4>
    </header>

    <br>

    
    <section>
        <h1>Programação PHP</h1><br>
        <h2>Resultado de sua análise de crédito</h2><br><br>
        
        <?php

            $nome = $_POST["nome"];

            $profissao = $_POST["profissao"];

            $salario = $_POST["salario"];

                echo "Olá Sr(a) <b>$nome</b>, abaixo está o resultado de sua solicitação:<br><br>";

                if($salario >=2000){
                    echo "Parabéns, seu crédito <b>foi aprovado</b>, um de nossos consultores entrará em contato em breve!<br>";
                    echo "Agradecemos a confiança<br>";
                }else{
                    echo "<b>Infelizmente</b>, sua solicitação <b>não foi aprovada</b> neste momento<br><br>";
                    echo "Tente novamente em outro momento<br>";
                }


        ?>

        <br>
        <a href="index.php"> <b> << VOLTAR AO INÍCIO </b></a>


    </section>

    <br>

          
    <footer>
        <h3>TREINAMENTOS DO FÃO</h3>
        <h4>Programação Web com HTML, CSS e PHP</h4>
        <br>
        <p class="texto-rodape"><b>Contato: ismaeloh1982@gmail.com</b></p>
        <br>
        <p class="texto-rodape">Desenvolvido por Treinamentos do Fão</p>
    </footer>

</body>
</html>
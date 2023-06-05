<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>IF ELSE - Programação PHP</title>

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
        <h2>Utilizando a função SE (IF/ELSE)</h2>
        
       <div class="formulario">

            <form action="analise.php" method="post" target="">
                
                <label for="nome">Nome:</label><br>
                <input type="text" name="nome" id="nome" placeholder="Insira seu nome">
                <br>
                <br>
                <label for="salario">Salário:</label><br>
                <input type="text" name="salario" id="salario" placeholder="Insira seu atual salário">
                <br>
                <br>
                <input type="submit" value="ENVIAR"><br>

            </form>

       </div>


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
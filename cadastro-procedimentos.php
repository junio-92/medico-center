<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="unico.css">
    <title>junio</title>
    <style>
        *{
            box-sizing: border-box
        }
        
        body{
            background: rgb(28,28,28);
        }

        .section1{
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            height: 460px;
        }

        .section2{
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            height: 290px;
        }

        section{
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            height: 375px;
        }

        .form1 {
            width: 500px;
            height: 345px;
            border-radius: 3px;
            background-color: rgb(32,32,32);
            color: white;
            padding: 20px;
            border: 2px solid rgb(0, 250, 154);
            margin: 15px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .form2 {
            width: 500px;
            height: 180px;
            border-radius: 3px;
            background-color: rgb(32,32,32);
            color: white;
            padding: 20px;
            border: 2px solid rgb(0, 250, 154);
            margin: 15px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        form{
            width: 500px;
            height: 365px;
            border-radius: 3px;
            background-color: rgb(32,32,32);
            color: white;
            padding: 20px;
            border: 2px solid rgb(0, 250, 154);
            margin: 15px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        select{
            width: 300px;
            height: 20px;
        }

        .button {
            background: rgb(40,40,40);
            color: rgb(255, 255, 255);
            z-index: 1;
        }

        .button:after {
            position: absolute;
            content: "";
            width: 0;
            height: 100%;
            top: 0;
            left: 0;
            direction: rtl;
            z-index: -1;
            background: rgb(255, 255, 255);
            transition: all 0.3s ease;
        }

        .button:hover {
            color: rgb(0, 250, 154);
        }

        .button:hover:after {
            left: auto;
            right: 0;
            width: 100%;
        }

        .button:active {
            top: 2px;
        }

        h1{
            color: #ffff;
            text-align: center;
        }

    </style>
    <h1>Cadastro de Procedimentos</h1>
  
</head>
<body>
    <section class="section1">
        <form class="form1" action="mysql.php" method="post">
            Nome:
            <input type="text" name="nome" id="nome"><br><br>
            Valor:
            <input type="number" name="valor" id="valor"><br><br>
            Gênero:
            <select name="genero">
                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
            </select><br><br>
            <input class="button" type="submit" value="Salvar">
            <input class="button" type="reset" value="Limpar"><br><br>
        </form>
    </section>

    <section class="section2">
        <form class="form2" action="delete.php" method="post">
            Deletar Codigo:<br><br>
            <input type="text" name="id" id="id">
            <input class="button" type="submit" value="Deletar"><br><br>
        </form>
    </section>


    <section>
        <form action="atualizar.php" method="post">
            Atualizar Codigo:
            <input type="text" name="id" id="id"><br><br>
            Nome:
            <input type="text" name="nome" id="nome"><br><br>
            Valor:
            <input type="number" name="valor" id="valor"><br><br>
            Gênero:
            <select name="genero">
                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
            </select><br><br>
            <input class="button" type="submit" value="Atualizar">
        </form>
    </section>
</body>
</html>
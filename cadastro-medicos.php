<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    </style>
</head>
<body>

<h1>Cadastro de Médicos</h1>
<div>
<form action="id-medicos.php" method="post">
        <section>
    <label>
        Nome: <input type="text" name="nome"/>
    </label><br><br>

    <label >
        Rua: <input type="text" name="rua"/>
    </label><br><br>

    <label >
        Numero: <input type="text" name="numero"/>
    </label><br><br>

    <label >
        Logadouro: <input type="text" name="logadouro"/>
    </label><br><br>
    </section>
    <label >
        Complemento: <input type="text" name="complemento"/>
    </label><br><br>

    <label >
        Bairro <input type="text" name="bairro"/>
    </label><br><br>

    <label >
        CEP: <input type="text" name="cep"/>
    </label><br><br>

    <label >
        E-mail: <input type="text" name="email"/>
    </label><br><br>

    <label >
        Celular: <input type="number" name="celular"/>
    </label><br><br>
        <section>
    <label >
        Telefone Fixo: <input type="number" name="fixo"/>
    </label><br><br>

    <label >
        Telefone Secundario: <input type="number" name="secundario"/>
    </label><br><br>

    <label>
        Data: <input type="date" name="data"/>
    </label><br><br>
    

    <input class="button" type="reset" value="Limpar"><br><br>
    <input type="submit">
    </section>
</form>
</div>
</body>
</html>
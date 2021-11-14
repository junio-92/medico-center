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
        h1{
            color: #ffff;
            text-align: center;
        }


    </style>
    
</head>



<body>
    <form action="s.a.php" method="post">
        <div class="tittle">
            <h4>Cadastro de Pacientes<h4>
        </div>

        <div class="card">
            <label for="nome">Nome:</label>
            <input type="text" name="nome"><br><br>

            <label for="rua">Rua:</label>
            <input type="text" name="rua"><br><br>

            <label for="logradouro">Logradouro:</label>
            <input type="text" name="logradouro"><br><br><br>

            <label for="num">Número:</label>
            <input type="number" name="num"><br><br>

            <label for="complemento">Complemento:</label>
            <input type="text" name="complemento"><br><br>

            <label for="bairro">Bairro:</label>
            <input type="text" name="bairro"><br><br>

            <label for="cep">CEP:</label>
            <input type="number" name="cep"><br><br>

            <label for="email">E-mail:</label>
            <input type="text" name="email"><br><br>

            <label for="tl_fixo">Telefone Fixo:</label>
            <input type="number" name="tl_fixo"><br><br>

            <label for="cel">Celular:</label>
            <input type="number" name="cel"><br><br>

            <label for="tl_sec">Telefone Secundário:</label>
            <input type="number" name="tl_sec"><br><br>

            <label for="assist">Tipo de Cadastro:</label>
            <select name="assist">
                <option value="C">Convenio</option>
                <option value="P">Particular</option>
                <option value="S">SUS</option>
            </select>

            <label for="a_data">Data:</label>
            <input type="date" name ="a_data">
        </div>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
        background: rgb(235,235,235);
    }
    form{
        background-color: #FFF;
        display: flex;
        flex-direction: column;
        padding: 15px;
        width: 325px;
        height: 325px;
        border-radius: 10px;
        box-shadow: 1px 5px 15px rgba(0,0,0,0.2);
    }
    input, select{
        margin: 5px 0;
        border: 0; 
        border-bottom: 1px solid black;
        outline: none;
        padding: 5px;
    }
    button{
        width: 100px;
        border-radius:8px;
        align-self: flex-end;
        margin-top: 20%;
        border:0;
        height: 35px;
        padding: 5px;
    }
    </style>
</head>
<body>
    <div class="container">
        <form autocomplete="off" method="GET" action="primeiroexercicio/calculo">
            <input placeholder="Digite seu nome" type="text" name="username"/>
            <input placeholder="Altura" type="text" name="userheight"/>
            <input placeholder="Peso" type="text" name="userwidth"/>
            <select name="usersex">
                <option value="null">Sexo</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
            <button type="submit">ENVIAR</button>
        </form>
    </div>
</body>
</html>
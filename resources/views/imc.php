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
        font-family: Arial, Helvetica, sans-serif;
    }
    .container{
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
        background: #DDF6;
    }
    form{
        background-color: #FFF;
        display: flex;
        flex-direction: column;
        padding: 15px;
        width: 325px;
        height: 400px;
        border-radius: 10px;
        box-shadow: 1px 5px 15px rgba(0,0,0,0.2);
    }
    input, select{
        margin: 10px 0;
        border: 0; 
        border-bottom: 3px solid #00CCCC;
        outline: none;
        padding: 5px;
    }
    button{
        color: #FFF;
        font-weight: bolder;
        background: #00CCCC ;
        cursor: pointer;
        outline: none;
        width: 100px;
        border-radius:8px;
        align-self: flex-end;
        margin-top: 20%;
        border:0;
        height: 35px;
        padding: 5px;
    }
    button:hover{
        transform: scale(1.1);
        transition: 0.2s;
    }
    
    .logo h1{
        margin-top: 7px;
        text-align: center;
        font-size: 25px;
        color: white;
    }
    .logo{
        display: flex;
        width: 100%;
        justify-content: center;
    }
    .logo div:first-child{
        border-radius: 5px;
        background: #00CCCC;
        width: 60px;
        height: 55px;
        padding: 0 5px; 
    }
    .img{
        background: yellow;
        width: 100%;
        height: 10px;
    }
    </style>
</head>
<body>
    <div class="container">
        <form autocomplete="off" method="GET" action="calculo">
            <div class="logo">
                <div>
                    <h1>IMC</h1>
                    <div class="img"></div>
                </div>
            </div>
            <input placeholder="Digite seu nome" type="text" name="username"/>
            <input placeholder="Altura" type="text" name="userheight"/>
            <input placeholder="Peso" type="text" name="userwidth"/>
            <select name="usersex">
                <option value="null">Sexo</option>
                <option value="Homem">Masculino</option>
                <option value="Mulher">Feminino</option>
            </select>
            <button type="submit">ENVIAR</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
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
        height: 350px;
        border-radius: 10px;
        box-shadow: 1px 5px 15px rgba(0,0,0,0.2);
    }
    input, select{
        margin: 20px 0;
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
<body onload="cancelSubmit()">
    <div class="container">
        <form action="calculo2" method="GET" autocomplete="off">
            <div class="logo">
                <div>
                    <h1>N+N</h1>
                    <div class="img"></div>
                </div>
            </div>
            <input type="text" placeholder="Digite um valor" name="valor1"/>
            <input type="text" placeholder="Digite outro valor" name="valor2"/>
            <button type="submit">ENVIAR</button>
        </form>
    </div>
</body>
</html>
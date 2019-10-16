<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        h1{
            
        }
        .container{
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 10vh 90vh auto;
        }
        .menu{
            grid-column: 1/3;
            grid-row: 1/2;
            display: flex;
            justify-content: space-between;
            margin: 0 96px;
        }
        .menu img{
            width: 200px;
        }
        .menu div{
            background: #15614F;
            height: 75px;
            width: 50px;
            border-radius: 0px 0px 15px 15px;
        }
        .section{
            grid-column: 1/2;
            grid-row: 2/3;
            margin: 50px 96px;
        }
        .aside{
            grid-column: 2/3;
            grid-row: 2/3;
            margin-top: 75px;
            margin-right:40px;
        }
        .section.texts{
            display: flex;
            flex-direction: column;
        }
        .texts h1{
            color: #15614F;
            font-size: 50px;
        }
        .texts span{
            color: #688B70;
            font-size: 30px;
        }
        .section .options{
            margin-top: 35px; 
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto auto auto;
        }
        .options button{
            cursor: pointer;
            outline: none;
            box-shadow: -13px -10px 2px #D9F1DE;
            margin: 25px 0;
            color: white;
            width: 205px;
            height: 55px;
            border-radius: 25px;
            border: none;
            font-weight: bolder;
            font-size: 25px;
            background-image: linear-gradient(to right, #15614F, #688B70);
        }
        .options button:hover{
            transition: 0.1s;
            box-shadow: 13px -10px 2px #97AF9C;
        }
        .options button:nth-child(1){
            grid-column: 1/2;
            grid-row: 1/2;
        }
        .options button:nth-child(2){
            grid-column: 2/3;
            grid-row: 2/3;
        }
        .options button:nth-child(3){
            grid-column: 1/2;
            grid-row: 3/4;
        }
        .aside img{
            width: 100%;
        } 
    </style>
</head>
<body>
    <div class="container">
        <div class="menu">
            <div>
            </div>
            <img src="{{ url('assets/laravelLogo.svg') }}" />
        </div>
        <div class="section">
            <div class="texts">
            <h1>W E L C O M E</h1>
                <span>To the amazing PHP framework</span>
                </div>
            <div class="options">
                <button>MY IMC</button>
                <button>GET CALC</button>
                <button>GET SQUAD</button>
            </div>
        </div>
        <div class="aside">
            <img ondragstart='return false' src="{{ url('assets/img.svg') }}" />
        </div>
    </div>
</body>
</html>
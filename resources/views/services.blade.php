<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Laravel</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            padding:0;
        }
        .navbar{
            background-color:#3f3f3f;
        }
        .nav{
            width:1140px;
            margin:0 auto;
        } ul {
            margin:0;
            padding:20px;
        } li{
            list-style-type: none;
            padding:20px;
            display: inline;
        } a{
            padding:18px;
            text-decoration: none;
            color:#ededed;
        }
        li:hover>a{
            border-bottom: 2px solid white;
            color:White;
        }
        .jumbotron{
            height:500px;
            background-color:gray;
            color:white;
            font-size: 5em;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items:center;
        }
        .jumbotron p{
            font-size: 0.2em;
            font-style: italic;
            font-weight:200;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <ul class="nav">
            <li>
                <a href="/">Home</a></a>
            </li>
            <li>
                <a href="/about">About</a>
            </li>
            <li>
                <a href="/services">Services</a>
            </li>
            <li>
                <a href="/products">Products</a>
            </li>
            <li>
                <a href="/contact">Contact</a>
            </li>
        </ul>
    </nav>
    <div class="jumbotron">
        This is the <i><b>SERVICES</b></i> page
    </div>
</body>
</html>

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
            color:indianred;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items:center;
            background-color: #F4F4F4;
        }
        .jumbotron label{
            font-size: 0.8em;
            font-style: italic;
            font-weight:200;
            margin:20px 0px;

        }
        .jumbotron input {
            background-color: transparent;
            font-style: italic;
            border: none;

        }
        .jumbotron textarea{
            
            background-color: white;
            font-style: italic;
            border: none;
            -webkit-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.46);
            -moz-box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.46);
            box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.46);
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
    <div class="jumbotron form">
        <label for="name">
            Name
            <input type="text" placeholder="name">
        </label>
        <label for="email">
            Email
            <input type="text" placeholder="email">
        </label>
        <label for="textarea">
            Your message
            <textarea name="textarea" id="" cols="50" rows="20"></textarea>
        </label>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Primeiro Senac</title>
</head>

<body>
    <header>
        <a href="index.php"><img src="img/logo.png"></a>
    </header>
        <nav>
            <div class="topnav" id="myTopnav">
                <a href="#home" class="active">Sua Conta</a>
                <a href="#news">Noticias</a>
                <a href="#publish">Publicacoes</a>
                <a href="#sobre">Sobre</a>
                <a href="#help">Ajuda</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>  
            </div>
        </nav>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
    
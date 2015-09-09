<?php require 'data.php';?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-icon-180x180.png">

    <link rel="icon" type="image/png" sizes="192x192"  href="/assets/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png">

    <link rel="manifest" href="/manifest.json">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/assets/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- site description -->
    <title>Ver o mapa do cartão transporte para os ônibus de Curitiba: onde emitir e carregar o seu cartão.</title>

    <meta name="description" content="Que usuário de ônibus de Curitiba nunca se viu perdido sem saber onde recarregar seu cartão de transporte? Por isso criamos o Kartão, um mapa simples e intuitivo onde se pode consultar o local mais próximo de você para recarga ou compra do seu cartão transporte da cidade.">
    <meta name="author" content="Kartao.com.br">
    <meta name="keywords" content="cartão, transporte, onibus, curitiba, mapa, urbs, usuário, banca">

    <!-- meta OG -->
    <meta property="og:title" content="Ver o mapa do cartão transporte para os ônibus de Curitiba: onde emitir e carregar o seu cartão."/>
    <meta property="og:site_name" content="Kartao.com.br"/>
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Que usuário de ônibus de Curitiba nunca se viu perdido sem saber onde recarregar seu cartão de transporte? Por isso criamos o Kartão, um mapa simples e intuitivo onde se pode consultar o local mais próximo de você para recarga ou compra do seu cartão transporte da cidade."/>
    <?php $domain = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];?>
    <meta property="og:url" content="http://kartao.com.br" />
    <meta property="og:image" content="http://kartao.com.br/assets/img/kartao.jpg"/>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/stylish-portfolio.css" rel="stylesheet">
    <link href="assets/css/kartao.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script src="assets/js/app.js"></script>
    <script>
        document.postos = <?php echo json_encode($postos);?>;
        document.vendas = <?php echo json_encode($vendas);?>;
    </script>
</head>
<body>

<div id="fb-root"></div>
    <script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4&appId=871255366303296";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

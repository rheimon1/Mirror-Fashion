<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>
        <?php
            print $cabecalho_title; 
        ?>
    </title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="less/estilos.less">
    <?php print @$cabecalho_css; ?>
    <link href="http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script" rel="stylesheet">
</head>

<body>
    <header class="container">
        <!--[if	lt	IE	9]>
            <script	src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <h1>
            <img src="img/logo.png" alt="logo da Mirro Fashion">
        </h1>
        <p class="sacola">
            Nenhum item na sacola de compras
        </p>
        <nav class="menu-opcoes">
            <ul>
                <li><a href="#">Sua conta</a></li>
                <li><a href="#">Lista de Desejos</a></li>
                <li><a href="#">Cartão Fidelidade</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
            </ul>
        </nav>
    </header>



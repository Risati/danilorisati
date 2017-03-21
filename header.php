<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="#0090C7">
		<meta name="msapplication-navbutton-color" content="#0090C7">

		<title>
				<?php if ( is_search() ) {
						echo "Resultados da busca para: "; echo the_search_query()." - "; bloginfo('name');
				} else {
						wp_title('');
				};
				?>
		</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		<?php wp_head(); ?>
</head>
<body>
<!-- Preloader -->
<!--<div id="preloader">
    <div id="status">&nbsp;</div>
</div>-->
<a class="toTop"><i class="fa fa-angle-up"></i></a>
<nav id="navbar-primary" class="navbar navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-danilo">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-danilo">
            <ul class="nav navbar-nav">
                <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                <li><a href="./sobre">Sobre</a></li>
                <li><a href="./portfolio">Portfolio</a></li>
                <li><a class="logo" href="<?php bloginfo('url'); ?>"><img id="logo-navbar-middle" src="<?php bloginfo('template_url'); ?>/assets/images/logo_simbolo.png"></a></li>
                <li><a href="./solucoes">Soluções</a></li>
                <li><a href="./contato">Contato</a></li>
                <li><a href="./artigos">Artigos</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

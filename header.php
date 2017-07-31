<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="/">
	<meta name="theme-color" content="#0090C7">
	<meta name="msapplication-navbutton-color" content="#0090C7">

	<title>
			<?php if ( is_search() ) {
					echo "Resultados da busca para: "; echo the_search_query()." - "; bloginfo('name');
			} else {
					wp_title('');
			}; ?>
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
	<nav id="navbar-primary" class="navbar" role="navigation">
	    <div class="navbar-inner">
			 <div class="container-fluid">
   	        <div class="navbar-header">
   	            <button type="button" class="navbar-toggle">
   	                <span class="sr-only">Toggle navigation</span>
   	                <span class="icon-bar"></span>
   	                <span class="icon-bar"></span>
   	                <span class="icon-bar"></span>
   	            </button>
						<div class="logo">
							<a href="<?php bloginfo('url'); ?>">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/logo_simbolo.svg" alt="">
							</a>
						</div>
   	        </div>

   	        <div class="collapse navbar-collapse" id="navbar-danilo">
   				  <!-- <a class="logo" href="<?php bloginfo('url'); ?>"><img id="logo-navbar-middle" src="<?php bloginfo('template_url'); ?>/assets/images/logo_simbolo.svg"></a> -->
   	            <ul class="nav navbar-nav">
   	                <!-- <li><a href="<?php bloginfo('url'); ?>">Home</a></li> -->
   	                <li><a href="#home">Início</a></li>
   	                <li><a href="#about">Sobre</a></li>
   	                <li><a href="#portfolio">Portfólio</a></li>
   	                <li><a href="#contact">Contato</a></li>
   	            </ul>
   	        </div>
   	    </div>
	    </div>
	</nav>
</header>


<!-- <div class="close-btn close-modal">
	<div class="lr">
		 <div class="rl">
		 </div>
	</div>
</div> -->

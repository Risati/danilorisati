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
<body <?php body_class(); ?>>
<header>
	<nav id="navbar-primary" class="navbar" role="navigation">
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
				  <a class="logo" href="<?php bloginfo('url'); ?>">
					  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 184.89 95.37">
					  	<title>Danilo Risati</title>
					  		<g id="logo">
					  			<path class="letter-r" d="M137.82,70.61H126V95.37H94.42V0h46.12c25.85,0,40.68,12.38,40.68,34.15,0,13.87-5.31,24.21-15.1,30.2l18.78,31H149.24Zm2.72-23.95c6.8,0,10.75-4.21,10.75-11.56,0-7.07-3.95-11.15-10.75-11.15H126V46.66"/>
					  			<path class="letter-d" d="M51.84,0H94.42V95.37H53.06C20.82,95.37,0,76.6,0,47.62S20.41,0,51.84,0ZM49.2,63.89H63.25V31.49H48.78c-10.68,0-17.61,6.33-17.61,16.18S38.24,63.89,49.2,63.89Z"/>
					  		</g>
					  </svg>
				  </a>
				  <!-- <a class="logo" href="<?php bloginfo('url'); ?>"><img id="logo-navbar-middle" src="<?php bloginfo('template_url'); ?>/assets/images/logo_simbolo.svg"></a> -->
	            <ul class="nav navbar-nav">
	                <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
	                <li><a href="./sobre">Sobre</a></li>
	                <li><a href="./portfolio">Portfolio</a></li>
	                <li><a href="./contato">Contato</a></li>
	                <li><a href="./artigos">Artigos</a></li>
	            </ul>
	        </div><!-- /.navbar-collapse -->
	    </div><!-- /.container-fluid -->
	</nav>
</header>
<!-- <div class="close-btn close-modal">
	<div class="lr">
		 <div class="rl">
		 </div>
	</div>
</div> -->

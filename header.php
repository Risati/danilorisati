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


				  <?php
					  wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						  'container_id'      => 'navbar-danilo',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
				  );
			  ?>
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

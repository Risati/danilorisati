<?php

/*
Template Name: Home page
*/
get_header();
?>
<section class="intro parallax" data-speed="7">
	<div class="name">
		<h1>Danilo <span>Risati</span></h1>
		<h2>Front end & web designer</h2>
	</div>
		<a class="scroll-down" href="#about"></a>
</section>

<section id="about" class="about" data-text="Sobre">
	<div class="container-fluid">
		<div class="row">
			<!-- <div class="section-title">
				<h2>Sobre</h2>
			</div> -->
			<div class="wrap">
				<div class="photo">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/danilorisati.jpg" alt="">
				</div>
				<div class="text">
					<p>Olá</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="portfolio" class="portfolio" data-text="Portfólio">
	<div class="container-fluid">
		<div class="row">
			<div class="wrap">
				<div class="second-title">
					<h4>Últimos projetos</h4>
				</div>
			</div>


		  <!-- <div class="controls">
			 <a><button class="button-type all-filter main-item-portfolio" data-text="Todos" data-filter="all"><span>Todos</span></button></a>
			 <a><button class="button-type all-filter" data-text="Institucional" data-filter=".categoria-institucional"><span>Institucional</span></button></a>
			 <a><button class="button-type all-filter" data-text="E-Commerce" data-filter=".categoria-e-commerce"><span>E-Commerce</span></button></a>
			 <a><button class="button-type all-filter" data-text="E-Commerce" data-filter=".categoria-hotsite"><span>Hotsite</span></button></a>
			 <a><button class="button-type all-filter" data-text="E-Commerce" data-filter=".categoria-landing-page"><span>Landing page</span></span></button></a>
		  </div> -->
		  <div id="portfolio-list" class="wrap projects-container">
				  <?php $args=array(
						  'paged' => $paged,
						  'numberposts'=>6,
						  'posts_per_page'=>6,
						  'post_status'=>"publish",
						  'post_type'=>"projetos",
						  'orderby'=>"post_date",
						  'order' => 'asc'
				  );
				  query_posts( $args );
				  while ( have_posts() ) : the_post(); ?>
					  <div class="item">
						  <article <?php post_class('mix portfolio-item') ?>>
   						  <?php if (has_post_thumbnail( $post->ID )):
   								  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'tamanho-blogn' );
   						  endif; ?>
   						  <div class="description">
   						  		<h3><?php the_title(); ?></h3>
   								<?php the_content(); ?>
   						  </div>
   						  <div class="image">
						  		 <a href="#" class="main-link portfolio-link" data-toggle="modal" data-target="#portfolio-modal-<?php the_ID(); ?>">
									 <img  src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
								 </a>
   						  </div>
   					  </article>
					  </div>
				  <?php endwhile; ?>
		  </div>
		  <div class="wrap">
		  		<a href="#">Veja todos os projetos</a>
		  </div>
		</div>
	</div>
</section>

<section id="services" class="services" data-text="Serviços">
	<div class="container-fluid">
		<div class="wrap">
			<div class="second-title">
				<h4>O que eu faço</h4>
			</div>
		</div>
		<div class="row">
			<div class="services-list">
				<div class="item">
					<i class="fa fa-globe"></i>
					<h3>Lorem ipsum dolor</h3>
					<p>Quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus bibendum ac placerat dolor lectus quis orci.</p>
				</div>
				<div class="item">
					<i class="fa fa-globe"></i>
					<h3>Lorem ipsum dolor</h3>
					<p>Quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus bibendum ac placerat dolor lectus quis orci.</p>
				</div>
				<div class="item">
					<i class="fa fa-globe"></i>
					<h3>Lorem ipsum dolor</h3>
					<p>Quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus bibendum ac placerat dolor lectus quis orci.</p>
				</div>
				<div class="item">
					<i class="fa fa-globe"></i>
					<h3>Lorem ipsum dolor</h3>
					<p>Quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus bibendum ac placerat dolor lectus quis orci.</p>
				</div>
				<div class="item">
					<i class="fa fa-globe"></i>
					<h3>Lorem ipsum dolor</h3>
					<p>Quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus bibendum ac placerat dolor lectus quis orci.</p>
				</div>
				<div class="item">
					<i class="fa fa-globe"></i>
					<h3>Lorem ipsum dolor</h3>
					<p>Quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus bibendum ac placerat dolor lectus quis orci.</p>
				</div>
				<div class="item">
					<i class="fa fa-globe"></i>
					<h3>Lorem ipsum dolor</h3>
					<p>Quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus bibendum ac placerat dolor lectus quis orci.</p>
				</div>
				<div class="item">
					<i class="fa fa-globe"></i>
					<h3>Lorem ipsum dolor</h3>
					<p>Quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus bibendum ac placerat dolor lectus quis orci.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="contact" class="contact" data-text="Contato">
	<div class="container-fluid">
		<div class="row">
			<div class="wrap">
				<div class="second-title">
					<h4>Vai um cafezinho?</h4>
				</div>

				<div class="text">
					<a href="tel:+5516992514237">(16) 99251-4237</a>
					<a href="mailto:contato@danilorisati.com.br">contato@danilorisati.com.br</a>
					<a href="skype:live:danilosouza2012?chat">danilosouza2012</a>
				</div>
				<div class="form">
					<div class="col">
						<label for="name">Nome</label>
						<input type="text" id="name">
					</div>
					<div class="col">
						<label for="email">E-mail</label>
						<input type="email" id="email">
					</div>
					<div class="col">
						<label for="subject">Assunto</label>
						<input type="text" id="subject">
					</div>
					<div class="col">
						<label for="message">Mensagem</label>
						<textarea id="message"></textarea>
					</div>
					<button type="submit" name="button">Enviar</button>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- portfolio modal -->
<?php
define('WP_USE_THEMES', false);

query_posts('showposts=2');
?>
<?php $args=array(
'numberposts'=>6,
'post_status'=>"publish",
'post_type'=>"projetos",
'orderby'=>"post_date",
'order' => 'asc');
 $postslist = get_posts( $args );
foreach ($postslist as $post) : setup_postdata($post); $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<div id="portfolio-modal-<?php the_ID(); ?>" class="portfolio-modal modal fade" role="dialog">
  <div class="modal-dialog">
			 <div class="modal-content">
				  <div class="closing close-modal" data-dismiss="modal">
						<div class="lr">
							 <div class="rl">
							 </div>
						</div>
				  </div>
				  <div class="container">
						<div class="row">
							 <div class="item">
								  <div class="modal-body">
										<h3><?php the_title(); ?></h3>
										<?php if (has_post_thumbnail( $post->ID )):
												$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'tamanho-blogn' );
										endif; ?>
										<img src="<?php echo $image[0]; ?>" alt="">
										<?php
											get_template_part( 'content', 'single' );
										 ?>
										 <div class="btnMore">
											 <a><button class="button-type closing" data-dismiss="modal" data-text="Fechar projeto"><span><i class="fa fa-times"></i> Fechar projeto</span></button></a>
										 </div>
								  </div>
							 </div>
						</div>
				  </div>
			 </div>
		</div>
</div>

<?php endforeach; ?>

<?php get_footer(); ?>

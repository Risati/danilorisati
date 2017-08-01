<?php

/*
Template Name: Home page
*/
get_header();
?>

<main>
	<section id="home" class="intro parallax" data-speed="7">
		<div class="wrap">
			<div class="name">
				<h1>Danilo <span>Risati</span></h1>
				<h2>Front end & web designer</h2>
			</div>
		</div>
		<a class="scroll-down" href="#about">
			<div class="mouse">
				<div class="scroll"></div>
			</div>
		</a>
	</section>

	<section id="about" class="about" data-text="Sobre">
		<div class="container-fluid">
			<div class="row">
				<!-- <div class="section-title">
					<h2>Sobre</h2>
				</div> -->
				<div class="wrap">
					<div class="photo" data-speed=".3">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/danilorisati.jpg" alt="">
					</div>
					<div class="text">
						<p>Olá.</p>
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
						<h4>Últimos projetos.</h4>
						<h5>A photo - is a search gfor what can get into the frame. When your limit events to a fame - You change these events</h5>
					</div>
				</div>

			  <div id="portfolio-list" class="projects-container">
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

	   					  </article>
						  </div>

					  <?php endwhile; ?>
			  </div>

			  <div class="wrap">
			  		<a class="button-type" href="#"><span>Veja todos os projetos</span></a>
			  </div>
			</div>
		</div>
	</section>

	<!-- <section id="services" class="services" data-text="Serviços">
		<div class="container-fluid">
			<div class="wrap">
				<div class="second-title">
					<h4>O que eu faço</h4>
					<h5>A photo - is a search gfor what can get into the frame. When your limit events to a fame - You change these events</h5>
				</div>
			</div>
			<div class="row">
				<div class="services-list">
					<div class="item">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/services/browser-4.svg" alt="">
						<h3>Institucional</h3>
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
	</section> -->

	<section id="contact" class="contact" data-text="Contato">
		<div class="container-fluid">
			<div class="row">
				<div class="wrap">
					<div class="second-title">
						<h4>Vamos bater um papo?</h4>
						<h5>A photo - is a search gfor what can get into the frame. When your limit events to a fame - You change these events</h5>
					</div>

					<div class="text">
						<a href="tel:+5516992514237"><i class="fa fa-mobile"></i>(16) 99251-4237</a>
						<a href="mailto:contato@danilorisati.com.br"><i class="fa fa-send"></i>contato@danilorisati.com.br</a>
						<a href="skype:live:danilosouza2012?chat"><i class="fa fa-skype"></i>danilosouza2012</a>
					</div>
					<div class="form">
						<div class="col">
							<input type="text" id="name">
							<label for="name">Nome</label>
							<span></span>
						</div>
						<div class="col">
							<input type="email" id="email">
							<label for="email">E-mail</label>
							<span></span>
						</div>
						<div class="col">
							<input type="text" id="subject">
							<label for="subject">Assunto</label>
							<span></span>
						</div>
						<div class="col">
							<textarea id="message"></textarea>
							<label for="message">Mensagem</label>
							<span></span>
						</div>
						<div class="col">
							<button class="button-type" type="submit" name="button"><span>Enviar</span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>



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

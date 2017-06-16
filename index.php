<?php

/*
Template Name: Home page
*/

get_header();

?>
	<!-- <section class="intro-site">
		<div class="wrap">
			<h1>Olá, eu sou <span>Danilo Risati</span></h1>
		</div>
	</section> -->


	<section class="about navigation" data-speed="15">
		<div class="wrap">
			<div class="desc">
				<i class="fa fa-briefcase"></i>
				<h2>Sobre</h2>
				<p>Conheça mais sobre mim, serviços e habilidades</p>
			</div>
		</div>
		<div class="content">
			<?php include 'includes/sobre.php'; ?>
		</div>
	</section>
	<section class="portfolio-home navigation" data-speed="15">
		<div class="wrap">
			<div class="desc">
				<i class="fa fa-briefcase"></i>
				<h2>Portfólio</h2>
				<p>Últimos projetos desenvolvidos</p>
			</div>
		</div>
		<div class="content">
			<?php include 'includes/portfolio.php'; ?>
		</div>
	</section>
	 <section class="contact-home navigation" data-speed="15">
	  <div class="wrap">
		  <div class="desc">
			  <i class="fa fa-paper-plane"></i>
			  <h2>Contato</h2>
			  <p>Obtenha meu contato e-mail, telefone ou skype</p>
		  </div>
	  </div>
	  <div class="content">
	  	<?php include "includes/contato.php"; ?>
	  </div>
  </section>

<div id="content"></div>

<?php get_footer(); ?>

<?php

/*
Template Name: Portfolio
*/

get_header();

?>
<div class="above-parallax">
    <div class="myName page-title">
        <div class="inner">
          <h1>Portfolio</h1>
        </div>
    </div>
		<div class="overlay"></div>
</div>
<section class="portfolio portfolio-page">
  <div class="container">
    <div class="row">
      <h1 class="text-center section-title">Últimos Projetos</h1>
      <div class="controls">
        <a><button class="button-type all-filter" data-text="Todos" data-filter="all"><span>Todos</span></button></a>
        <a><button class="button-type all-filter" data-text="Institucional" data-filter=".categoria-institucional"><span>Institucional</span></button></a>
        <a><button class="button-type all-filter" data-text="E-Commerce" data-filter=".e-commerce"><span>E-Commerce</span></button></a>
        <a><button class="button-type all-filter" data-text="Landing Page" data-filter=".landing"><span>Landing Page</span></button></a>
      </div>
      <div id="portfolio" class="projects-container">
				<?php $args=array(
						'paged' => $paged,
						'numberposts'=>100,
						'posts_per_page'=>100,
						'post_status'=>"publish",
						'post_type'=>"projetos",
						'orderby'=>"post_date"
				);
				query_posts( $args );
				while ( have_posts() ) : the_post(); ?>

					<article <?php post_class('mix portfolio-item') ?>>
						<?php if (has_post_thumbnail( $post->ID )):
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'tamanho-blogn' );
						endif; ?>
						<div class="portfolio-thumb in">
								<a href="#portfolio-modal-<?php the_ID(); ?>" class="main-link portfolio-link" data-toggle="modal">
										<img class="img-responsive img-center" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
										<h2 class="project-title"><?php the_title(); ?></h2>
										<span class="overlay-mask"></span>
								</a>
								<a class="enlarge centered cboxElement" href="#portfolio-modal-<?php the_ID(); ?>" title="<?php the_title(); ?>" data-toggle="modal"><i class="fa fa-expand fa-fw"></i></a>
						</div>
					</article>
				<?php endwhile; ?>
      </div>
    </div>
  </div>
</section>
<section class="contact">
    <div class="container">
        <div class="row">
            <h3>Vai um cafezinho? <i class="fa fa-coffee"></i></h3>
            <p>Quisque auctor, magna suscipit dignissim vestibulum, nulla dolor tristique quam, ac viverra nunc purus suscipit tortor. </p>
            <a href="#"><button class="button-type" data-text="Contato"><span>Contato</span></button></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>

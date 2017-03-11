<?php

/*
Template Name: Home page
*/

get_header();

?>

<header>
    <div class="container">
        <div class="row">
            <div class="myName">
                <div class="inner">
                  <h1>Danilo Risati</h1><h2>Desenvolvedor Web Front-End</h2>
                </div>
            </div>
            <div class="goTo">
                <div class="mouse-icon"><div class="wheel"></div></div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</header>
  <section class="portfolio">
    <div class="container">
      <h1>Últimos Projetos</h1>
      <div class="controls">
        <a><button class="button-type all-filter main-item-portfolio" data-text="Todos" data-filter="all"><span>Todos</span></button></a>
        <a><button class="button-type all-filter" data-text="Institucional" data-filter=".categoria-institucional"><span>Institucional</span></button></a>
        <a><button class="button-type all-filter" data-text="E-Commerce" data-filter=".e-commrce"><span>E-Commerce</span></button></a>
        <a><button class="button-type all-filter" data-text="Landing Page" data-filter=".landing"><span>Landing Page</span></button></a>
      </div>


      <div id="portfolio" class="projects-container">
				<?php $args=array(
						'paged' => $paged,
						'numberposts'=>6,
						'posts_per_page'=>6,
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
         <div class="btnMore">
            <a href="#"><button class="button-type" data-text="Ver mais"><span>Ver mais</span></button></a>
         </div>
      </div>
    </div>
  </section>

  <section class="services">
      <div class="container">
          <div class="row">
            <div class="title-section">
              <h1 class="section-title">Soluções</h1>
            </div>
              <div class="service-item">
                  <div class="feature-box">
                      <div class="icon">
                          <i class="fa fa-code"></i>
                      </div>
                      <div class="text">
                          <h3>Service title</h3>
                          <p>doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                      </div>
                  </div>
              </div>
              <div class="service-item">
                  <div class="feature-box">
                      <div class="icon">
                          <i class="fa fa-code"></i>
                      </div>
                      <div class="text">
                          <h3>Service title</h3>
                          <p>doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                      </div>
                  </div>
              </div>
              <div class="phone-gap">
                  <div class="phone-service">
                      <img src="<?php bloginfo('template_url'); ?>/assets/images/phone-service.png">
                  </div>
              </div>
              <div class="service-item">
                  <div class="feature-box">
                      <div class="icon">
                          <i class="fa fa-code"></i>
                      </div>
                      <div class="text">
                          <h3>Service title</h3>
                          <p>doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                      </div>
                  </div>
              </div>
              <div class="service-item">
                  <div class="feature-box">
                      <div class="icon">
                          <i class="fa fa-code"></i>
                      </div>
                      <div class="text">
                          <h3>Service title</h3>
                          <p>doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                      </div>
                  </div>
              </div>
              <a href="#"><button class="button-type" data-text="Ver mais"><span>Ver mais</span></button></a>
          </div>
      </div>
  </section>

  <?php include 'single-projetos.php' ?>

<?php include 'footer.php' ?>

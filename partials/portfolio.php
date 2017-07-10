<div class="container">
  <div class="controls">
	 <a><button class="button-type all-filter main-item-portfolio" data-text="Todos" data-filter="all"><span>Todos</span></button></a>
	 <a><button class="button-type all-filter" data-text="Institucional" data-filter=".categoria-institucional"><span>Institucional</span></button></a>
	 <a><button class="button-type all-filter" data-text="E-Commerce" data-filter=".categoria-e-commerce"><span>E-Commerce</span></button></a>
  </div>

  <div id="portfolio" class="projects-container">
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

			  <article <?php post_class('mix portfolio-item') ?>>
				  <?php if (has_post_thumbnail( $post->ID )):
						  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'tamanho-blogn' );
				  endif; ?>
				  <div class="portfolio-thumb in">
						  <a href="#portfolio-modal-<?php the_ID(); ?>" class="main-link portfolio-link" data-toggle="modal">
							  <figure>
								  <img class="img-responsive img-center" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
								  <figcaption>
									  <h3 class="project-title"><?php the_title(); ?></h3>
									  <span class="overlay-mask"></span>
								  </figcaption>
							  </figure>
						  </a>
						  <!-- <a class="enlarge centered cboxElement" href="#portfolio-modal-<?php the_ID(); ?>" title="<?php the_title(); ?>" data-toggle="modal"><i class="fa fa-expand fa-fw"></i></a> -->
				  </div>
			  </article>
		  <?php endwhile; ?>
  </div>
</div>



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

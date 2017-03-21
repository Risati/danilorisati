<?php
/**
 * PORTFOLIO
 *
 * @package Danilo Risati
 * @since Danilo Risati 1.0
 */

?>

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
                              <h2><?php the_title(); ?></h2>
										<?php if (has_post_thumbnail( $post->ID )):
												$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'tamanho-blogn' );
										endif; ?>
            						<img src="<?php echo $image[0]; ?>" alt="">
										<?php
											while ( have_posts() ) : the_post();
													get_template_part( 'content', 'single' );
											endwhile;
										 ?>
                              <button type="button" class="btn btn-primary closing" data-dismiss="modal"><i class="fa fa-times"></i> Fechar projeto</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</div>

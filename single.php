<?php
/**
 * The template for displaying posts
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package Danilo Risati
 * @since Danilo Risati 1.0
 */

get_header(); ?>

</body>
<body class="single-page">
<section class="post-title">
  <h1><?php the_title(); ?></h1>
</section>
<section class="single-article">
  <div class="container">
    <div class="row">
      <article class="post-meta">
				 <?php while ( have_posts() ) : the_post(); ?>
					 <div class="author-date">
	           Por <h1> <?php the_author(); ?></h1> em <h2><?php the_category(); ?></h2> | <h3><?php the_time('d \d\e F \d\e Y ') ?></h3>
	         </div>
				<?php endwhile; ?>
				<div class="content-post">
					<?php
					 while ( have_posts() ) : the_post();
							 get_template_part( 'content', 'single' );
					 endwhile;
				 ?>
				</div>
      </article>

      <aside class="sidebar">
        <h3>Procurando por algo?</h3>
				<?php
					dynamic_sidebar('single_sidebar');
			 	?>
      </aside>
    </div>
  </div>
</section>

</body>



<?php get_footer(); ?>

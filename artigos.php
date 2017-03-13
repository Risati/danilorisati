<?php
/*
Template Name: Artigos
*/
get_header();
require( 'wp-blog-header.php'); ?>

</body>
<body class="blog-page">

  <section class="artigos">
    <div class="container">
      <div class="row">
				<?php $args=array(
				'paged' => $paged,
				'numberposts'=>3,
				'posts_per_page'=>3,
				'cat' => '-5',
				'post_status'=>"publish",
				'post_type'=>"post",
				'orderby'=>"post_date"
				);
				query_posts( $args );
				while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink(); ?>">
					<article <?php post_class('item') ?>>
						<?php if (has_post_thumbnail( $post->ID )):
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'image-size');
						endif; ?>
						<div class="photo">
							<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
						</div>
						<div class="post-meta">
							<h2 class="title"><?php the_title(); ?></h2>
						</div>
					</article>
				</a>
				<?php endwhile; ?>
      </div>
    </div>
  </section>

  <section class="featured-articles">
    <div class="container">
      <div class="row">
				<?php $args=array(
				'paged' => $paged,
				'numberposts'=>2,
				'posts_per_page'=>2,
				'category'=> '5',
				'post_status'=>"publish",
				'post_type'=>"post",
				'orderby'=>"post_date"
				);
				query_posts( $args );
				while ( have_posts() ) : the_post(); ?>
				<div class="slider posts-teste">

						<article <?php post_class('item') ?>>
							<?php if (has_post_thumbnail( $post->ID )):
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'image-size');
							endif; ?>
							<div class="photo">
								<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
							</div>
							<div class="post-meta">
								<h2 class="title"><?php the_title(); ?></h2>
							</div>
						</article>

				</div>

				<?php endwhile; ?>
      </div>
    </div>
  </section>
</body>

<?php include 'footer.php' ?>

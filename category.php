<?php get_header(); ?>
<div id="content" class="row">
	<div id="zawartosc" class="col-lg-10" >
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
		<div class=" clearfix content-heading "><hr><?php
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
				echo '<a "href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '">';
				?><p class="col-xs-3 img-responsive" style="float: left;"><?php the_post_thumbnail( 'thumbnail' , array( 'class' => 'pull-left' )); ?></p><?php
			echo '</a>';
			} ?>
			<div class="promocje_thumbnail">
			<a href="<?php echo get_permalink(); ?>"> <?php the_title( '<h4>', '</h4>' ); ?></a>
			<?php
				the_excerpt();
			?></div>
		</div><?php
		endwhile;?>
		<div class="pull-left"><?php next_posts_link( 'Poprzednie wpisy' ); ?></div>
		<div class="pull-right"><?php previous_posts_link( 'Następne wpisy' ); ?></div>
		<?php else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</div>
	<?php include ('sidebar-right.php'); ?>
</div>
<?php get_footer(); ?>
<?php get_header(); ?>
<div id="content" class="row">
	<div id="zawartosc" class="col-lg-10">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		the_content();
		endwhile; else: ?>
		<p>Przepraszamy, w tym miejscu nie ma żadnych artykułów.</p>
		<?php endif; ?>
	</div>
	<?php include ('sidebar-right.php');?>
</div>
<?php get_footer(); ?>
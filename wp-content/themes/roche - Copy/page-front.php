<?php 
/* Template Name: Frontpage */ 
get_header(); 
?>
<main role="main">
<div class="container">
    <div class="row">
        <div class="col-md-6" >
        	<div class="fixed-content">
            	<div class="categories">
					<?php 
					$args = array(
						'hide_empty' => 1,
					);
					$categories = get_categories( $args );
					
					foreach ($categories as $category) {
						echo '<a href="' . get_category_link( $category->term_id ) . '" class="btn" />' . $category->cat_name . '</a>';
					};
					
					?>
                </div>
                <a href="<?php site_url(); ?>" class="btn"><?php the_title(); ?></a>
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php the_content(); ?>
                    </article>
                <?php endwhile; endif; ?>
			</div>
        </div>
        <div class="col-md-6">
		<?php 
			$args = array(
				'post_type' => 'post',
				'order'    => 'ASC'
			);
			query_posts( $args ); 
	
			while ( have_posts() ) : the_post();
		?>
        	<div class="col-sm-12 post-container">
            	<div class="top clearfix">
                    <p class="post-date"><?php echo get_the_date( get_option('date_format') ); ?></p>
                    <h2><?php the_title(); ?></h2>
				</div>
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="middle"><?php the_post_thumbnail(); ?></div>
				<?php } ?>
                <div class="bottom">
                	<p><?php the_excerpt(); ?></p>
					<div class="social-share clearfix">
                    	<div class="tags">
						<?php
							$posttags = get_the_tags();
							if ($posttags) {
							  foreach($posttags as $tag) {
								echo ' <span>#' . $tag->name . '</span> '; 
							  }
							}
                        ?>                    
                    	</div>
                        <div class="social-icons">
                            <div style="float: left; padding-right:10px;">
                                <div class="fb-share-button" data-layout="button_count"></div>
                            </div>
                            <div style="float: left; padding-right:10px;">
                                <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>">Tweet</a>
                            </div>
                            <div style="float: left; padding-right:10px;">
                                <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                                <script type="IN/Share" data-counter="right"></script>
                            </div>
                            <div style="float: left;">
                                <a href="mailto:?subject=Shared from Roche Website&amp;body=<?php echo the_permalink() ?>" title="Share by Email">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/email-share.png">
                                </a>
                            </div>
						</div>                    
        			</div>
                </div>
 
        	</div>
		<?php endwhile; ?>
        </div>
    </div>
</div>
</main>
<?php get_footer(); ?>

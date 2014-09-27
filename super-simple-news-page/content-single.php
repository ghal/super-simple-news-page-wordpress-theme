<?php
/**
 * @package super simple news page
 */
?>			<style type="text/css">
				.article #article-img{
				width: 100%;
				background-image: url("<?php
					$image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id,'large', true);
					echo $image_url[0];
				 ?>");
				background-position: top center;
				background-repeat: no-repeat;
				background-size: cover;
				height: 400px;
				}
			</style>
            <div class="article">
            	<div class="entry-meta">
					<?php super_simple_news_page_posted_on(); ?>
				</div><!-- .entry-meta -->
                <div id="article-img"></div>
                <?php the_title( '<h1>', '</h1>' ); ?>
                <div id="article-content">
					<?php the_content(); ?>
				</div>
            </div>
            		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'super-simple-news-page' ),
				'after'  => '</div>',
			) );
		?>
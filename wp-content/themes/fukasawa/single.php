<?php get_header(); ?>

<div class="content thin">
											        
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div id="post-<?php the_ID(); ?>" <?php post_class('single'); ?>>
		
			<?php $post_format = get_post_format(); ?>
			
			<?php if ( $post_format == 'video' ) : ?>
			
				<?php $video_url = get_post_meta($post->ID, 'video_url', true); if ( $video_url != '' ) : ?>
				
					<div class="featured-media">
					
						<?php if (strpos($video_url,'.mp4') !== false) : ?>
							
							<video controls>
								<source src="<?php echo esc_url( $video_url ); ?>" type="video/mp4">
							</video>
																					
						<?php else : ?>
							
							<?php 
							
								$embed_code = wp_oembed_get($video_url); 
								
								echo $embed_code;
								
							?>
								
						<?php endif; ?>
						
					</div>
				
				<?php endif; ?>
				
			<?php elseif ( $post_format == 'gallery' ) : ?>
			
				<div class="featured-media-single">	
	
					<?php fukasawa_flexslider('post-image'); ?>
					
					<div class="clear"></div>
					
				</div> <!-- /featured-media -->
				
			<?php elseif ( $post_format == 'quote' ) : ?>
			
				<?php $quote_content = get_post_meta($post->ID, 'quote_content', true); ?>
				<?php $quote_attribution = get_post_meta($post->ID, 'quote_attribution', true); ?>
					
				<div class="post-quote">
				
					<div class="post-inner">
						
						<blockquote><?php echo $quote_content; ?></blockquote>
					
						<?php if ( $quote_attribution != '' ) : ?>
						
							<cite><?php echo $quote_attribution; ?></cite>
						
						<?php endif; ?>
					
					</div> <!-- /post-inner -->
				
				</div> <!-- /post-quote -->
			
			<?php elseif ( has_post_thumbnail() ) : ?>
					
				<!--<div class="featured-media">
		
					<?php the_post_thumbnail('post-image'); ?>
					
				</div>--> <!-- /featured-media -->
					
			<?php endif; ?>
			
			<div class="post-inner">
				
				<h2 class="single-title"><?php the_title(); ?></h2>

				<!--- スマホ・アドセンス -->
				<?php if (wp_is_mobile()) :?>
 				<div class="single-page-top-ad">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">				
					</script> 
					<!-- mobile_ad2 -->
					<ins class="adsbygoogle"
					     style="display:inline-block;width:300px;height:250px"
					     data-ad-client="ca-pub-4459451284696017"
					     data-ad-slot="4254534085"></ins>
					<script>
					     (adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
				<?php endif; ?>
				
				<div class="post-header">
															
				</div> <!-- /post-header -->
				    
			    <div class="post-content">
				
				<div class="post-content-inner">
			    
			    	   <?php the_content(); ?>
				
				</div>
			    			<div class="clear"></div>	

		            	<div class="post-meta-bottom">

				  <ul>
					<li class="post-date"><a href="<?php 	the_permalink(); ?>"><?php the_date(get_option('date_format')); ?></a></p>
<?php if (has_category()) : ?>
<?php endif; ?>
<?php edit_post_link('Edit post', '<li>', '</li>'); ?>
</ul>
<div class="clear"></div>
</div> <!-- /post-meta-bottom --> 

			    </div> <!-- /post-content -->
	
			
			</div> <!-- /post-inner -->
			
			<?php
				$prev_post = get_previous_post();
				$next_post = get_next_post();
			?>
			
			<div class="post-navigation">
			
				<?php
				if (!empty( $prev_post )): ?>
				
					<a class="post-nav-prev" title="<?php _e('Previous post', 'fukasawa'); echo ': ' . esc_attr( get_the_title($prev_post) ); ?>" href="<?php echo get_permalink( $prev_post->ID ); ?>">
						<p>&larr; <?php _e('PREV', 'fukasawa'); ?></p>
					</a>
				<?php endif; ?>
				
				<?php
				if (!empty( $next_post )): ?>
					
					<a class="post-nav-next" title="<?php _e('Next post', 'fukasawa'); echo ': ' . esc_attr( get_the_title($next_post) ); ?>" href="<?php echo get_permalink( $next_post->ID ); ?>">					
						<p><?php _e('NEXT', 'fukasawa'); ?> &rarr;</p>
					</a>
			
				<?php endif; ?>
				
				<div class="clear"></div>
			
			</div> <!-- /post-navigation -->							
		
		</div> <!-- /post -->
									                        
   	<?php endwhile; else: ?>

		<p><?php _e("We couldn't find any posts that matched your query. Please try again.", "fukasawa"); ?></p>
	
	<?php endif; ?>    

</div> <!-- /content -->
		
<?php get_footer(); ?>
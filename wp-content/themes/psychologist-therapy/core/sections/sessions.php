<?php if ( get_theme_mod('psychologist_therapy_session_section_enable') ) : ?>

<div class="session py-5">
	<div class="container">		
		<?php if ( get_theme_mod('psychologist_therapy_session_heading') ) : ?>
			<h3 class="text-center"><?php echo esc_html(get_theme_mod('psychologist_therapy_session_heading')); ?></h3>
		<?php endif; ?>
		<?php if ( get_theme_mod('psychologist_therapy_session_heading_text') ) : ?>
			<p class="text-center pb-4"><?php echo esc_html(get_theme_mod('psychologist_therapy_session_heading_text')); ?></p>
		<?php endif; ?>
		<?php $args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'category_name' =>  get_theme_mod('psychologist_therapy_session_category'),
			'posts_per_page' => 12,
		); ?>
		<div class="row">
	  	  	<?php $arr_posts = new WP_Query( $args );
		    	if ( $arr_posts->have_posts() ) :
		      	while ( $arr_posts->have_posts() ) :
		        $arr_posts->the_post();
		        ?>
		        <div class="col-lg-4 col-md-6 col-sm-6">
			        <div class="session_inner_box mb-4">
	    				<?php if ( has_post_thumbnail() ) : the_post_thumbnail(); endif; ?>
		    			<div class="session_content_box">
			        		<h4><?php the_title(); ?></h4>
			              	<p class="mb-0"><?php echo wp_trim_words( get_the_content(), 5 ); ?></p>
		              		<hr>
		              		<p class="mb-0 bold-txt">
		                		<a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('Continue Reading','psychologist-therapy'); ?></a>
		              		</p>
			            </div>
	        		</div>
			    </div>
		      	<?php
		    endwhile;
		    wp_reset_postdata();
		    endif; ?>
		</div>
	</div>
</div>

<?php endif; ?>
<?php if ( get_theme_mod('engineering_manufacturing_services_section_enable') ) : ?>

<div class="services py-5">
	<div class="container">
		<?php if ( get_theme_mod('engineering_manufacturing_services_heading') ) : ?>
			<h3 class="text-center pb-4"><?php echo esc_html(get_theme_mod('engineering_manufacturing_services_heading')); ?></h3>
		<?php endif; ?>
		<?php $args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'category_name' =>  get_theme_mod('engineering_manufacturing_services_category'),
			'posts_per_page' => 12,
		); ?>
		<div class="row">
	  	  	<?php $arr_posts = new WP_Query( $args );
		    	if ( $arr_posts->have_posts() ) :
		      	while ( $arr_posts->have_posts() ) :
		        $arr_posts->the_post();
		        ?>
		        <div class="col-lg-4 col-md-6 col-sm-6">
			        <div class="services_inner_box mb-4">
	    				<?php if ( has_post_thumbnail() ) : the_post_thumbnail(); endif; ?>
		    			<div class="services_content_box mt-3">
			        		<h4><?php the_title(); ?></h4>
			              	<p class=""><?php echo wp_trim_words( get_the_content(), 20 ); ?></p>
		              		<p class="mb-0 bold-txt">
		                		<a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('Read More','engineering-manufacturing'); ?></a>
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
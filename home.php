<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article  id="post-<?php the_ID(); ?>">
				<?php the_content(); ?>						
						<div class="container_12">
						<div class="flexslider grid_9">
							<ul class="slides">
								<?php $images = getFieldOrder('slider-image'); 
									if(is_array($images))
									{foreach($images as $image)
										{echo "<li>"; 
										 echo get_image('slider-image',1,$image); 
										 echo "</li>";
										}
									}
								?>
							</ul> 						
						</div>
                
						<div class="flexbuttons grid_2">
							<ul>
								<li class="buttons"><a href="#"><?php echo get('flex_button',1,1); ?></a></li>
								<li class="buttons"><a href="#"><?php echo get('flex_button',1,2); ?></a></li>

							</ul> 						
						</div>
						<div class="grid_12">
							<ul class="minifeatured">
								<li class="grid_3 mini"><a href="#"><img src="http://placehold.it/200x130&text=left"/></a></li>
								<li class="grid_3 mini"><a href="#"><img src="http://placehold.it/200x130&text=center"/></a></li>
								<li class="grid_3 mini"><a href="#"><img src="http://placehold.it/200x130&text=right"/></a></li>

							</ul>
						</div>

						</div>
		</article>

		<?php endwhile; endif; ?>
<?php get_footer(); ?>

<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article  id="post-<?php the_ID(); ?>">
				<?php the_content(); ?>						
					
						<div class="flexslider blueberry grid_9">
							<ul class="slides">
								<?php $images = getFieldOrder('slider_image'); 
									if(is_array($images))
									{foreach($images as $image)
										{echo "<li>"; 
										 echo get_image('slider_image',1,$image); 
										 echo "</li>";
										}
									}
								?>
							</ul> 						
						</div>
                
						<div class="flexbuttons grid_3">
							<ul class="pager">
								<li class="buttons"><a href="<?php echo get('slider_button_link',1,1); ?>"><?php echo get('slider_button',1,1); ?></a></li>
								<li class="buttons"><a href="<?php echo get('slider_button_link',1,2); ?>"><?php echo get('slider_button',1,2); ?></a></li>

							</ul> 						
						</div>
						
						<div class="clear"></div> 

							<ul class="minifeatured">
								<li class="grid_3 mini"><a href="<?php echo get('mini_featured_link',1,1); ?>"><img src="<?php echo get('mini_featured_image',1,1); ?>"/></a></li>
								<li class="grid_3 mini"><a href="<?php echo get('mini_featured_link',1,2); ?>"><img src="<?php echo get('mini_featured_image',1,2); ?>"/></a></li>
								<li class="grid_3 mini"><a href="<?php echo get('mini_featured_link',1,3); ?>"><img src="<?php echo get('mini_featured_image',1,3); ?>"/></a></li>
								<li class="grid_3 mini font">
								<hr style="border-top-color:#c67655;">
								<!-- Begin MailChimp Signup Form -->
									<form action="http://ssekodesigns.us2.list-manage.com/subscribe/post?u=918f13b2195c1a617550a626a&amp;	id=b87be29ca1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
									<label for="mce-EMAIL">Sign up</label><br><span style="font-size:smaller;">for our newsletter:</span>
									<input style="width:80%;" type="email" value="" name="EMAIL" class="required email " id="mce-EMAIL">
									<input type="image" src="wp-content/themes/Sseko/images/go.png" alt="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
									</form>
									<hr style="border-top-color:#c67655;">
								<!--End mc_embed_signup-->
									<span>
										<ul class="social">
											<li><a href="http://www.youtube.com"><img src="images/youtube.png"/></a></li>
											<li><a href="http://www.ssekodesigns.com/rss"><img src="images/rss.png"/></a></li>
											<li><a href="http://www.facebook.com/ssekodesigns"><img src="images/facebook.png"/></a></li>
											<li><a href="http://twitter.com/#!/ssekodesigns"><img src="images/twitter.png"/></a></li>

										</ul>
									</span>
								</li>
							</ul>
						
						<div class="clear"></div>	
		</article>

		<?php endwhile; endif; ?>
<?php get_footer(); ?>

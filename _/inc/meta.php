<footer class="meta">
	<span class="byline author vcard">
		<i>posted by</i> <span class="fn"><?php the_author() ?> </span>
	</span>
	<i>on </i> <time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('l, F j') ?></time>
	<i><?php the_category(', ') ?></i>
	<?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?>
</footer>
<footer class="entry-footer">
	<?php
	// Get Tags for posts.
	$tags_list = get_the_tag_list( '', ' ' );
	if ( $tags_list && !is_archive() && !is_front_page() ) { ?>
		<div class="tags-links">
			<span class="fa fa-tags fa-lg" title="<?php esc_attr_e('Tags', 'free-template'); ?>" data-toggle="tooltip" data-placement="bottom"></span>&nbsp;
			<?php echo $tags_list; // xss ok ?>
		</div><?php
	}

	if ( is_single() or is_archive() ) {
		// Get Categories for posts.
		$categories_list = get_the_category_list( esc_html__( ', ', 'free-template' ) );
		if ( $categories_list  ) { ?>
			<div class="footer-item cat-links">
				<i class="fa fa-list-ul fa-lg" title="<?php esc_attr_e('Categories', 'free-template'); ?>" data-toggle="tooltip" data-placement="bottom" aria-hidden="true"></i>
				<?php echo $categories_list; //xss ok ?>
			</div><?php
		} ?>

		<div class="footer-item author-name">
			<i class="fa fa-user fa-lg" title="<?php esc_attr_e('Author', 'free-template'); ?>" data-toggle="tooltip" data-placement="bottom" aria-hidden="true"></i>
			<span class="author vcard" title="<?php esc_attr_e('Author', 'free-template'); ?>" data-toggle="tooltip" data-placement="bottom">
				<a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author(); ?></a>
			</span>
		</div>
		
		<div class="footer-item">
				<?php Free_Template::posted_on(); ?>
				<?php Free_Template::modified_on(); ?>
		</div>
	<?php } ?>

	<?php
	if ( function_exists( 'wp_statistics_pages' ) && get_theme_mod('display_visits', true) && !is_front_page() ) { ?>
	<div class="footer-item total-hits">
		<i class="fa fa-bar-chart fa-lg" title="<?php esc_attr_e('Total Hits', 'free-template'); ?>" data-toggle="tooltip" data-placement="bottom" aria-hidden="true"></i> 
		<span class="stat-hits" title="<?php esc_attr_e('Total Hits', 'free-template'); ?>" data-toggle="tooltip" data-placement="bottom">
		<?php echo esc_html(wp_statistics_pages( 'total', "", get_the_ID()) ); ?>
		</span>
	</div><?php
	}
	
	if(comments_open( get_the_ID() )){ ?>
	<div class="footer-item comments-number">
		<i class="fa fa-comments fa-lg" title="<?php esc_attr_e('Comments Number', 'free-template'); ?>" data-toggle="tooltip" data-placement="bottom" aria-hidden="true"></i> 
		<span class="comments-count" title="<?php esc_attr_e('Comments Number', 'free-template'); ?>" data-toggle="tooltip" data-placement="bottom">
		<?php echo esc_html(get_comments_number()); ?>
		</span>
	</div>
	<?php }

	if ( current_user_can( 'edit_post', get_the_ID() ) ) { ?>
		<div class="footer-item pull-right">
			<?php Free_Template::edit_link(); ?>
		</div><?php
	}
	?>
</footer> <!-- .entry-footer -->
<?php

/**
 * Single Topic
 *
 * @package bbPress
 * @subpackage Theme
 */

get_header(); ?>


	<?php do_action( 'bbp_before_main_content' ); ?>

	<?php do_action( 'bbp_template_notices' ); ?>

	<?php if ( bbp_user_can_view_forum( array( 'forum_id' => bbp_get_topic_forum_id() ) ) ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<div id="bbp-topic-wrapper-<?php bbp_topic_id(); ?>" class="bbp-topic-wrapper">
				<div class="head-action-area">
					<h2 class="head-logo"><a href="<?php echo home_url() ?>"><img src="<?php bloginfo('template_directory'); ?>/img/common/logo.png" alt=""></a></h2>
					<h1 class="entry-title"><?php bbp_topic_title(); ?></h1>
					<ul class="head-action-list">
						<li class="head-action-top"><a href="<?php echo home_url() ?>">TOP</a></li>
						<li class="head-action-search">
							<a href="javascript:void(0)"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/common/icon_search.png" alt=""></a>
						</li>
						<li class="head-action-create">
							<a href="javascript:void(0)"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/common/icon_create.png" alt=""></a>
						</li>
					</ul>
				</div>
				<div class="entry-content">

					<?php bbp_get_template_part( 'content', 'single-topic' ); ?>

					<div class="side-area">
						<div class="side-action">
							<a href="<?php echo home_url() ?>">TOPへ</a>
							<a href="javascript:void(0)" class="head-action-create">病気を作成する</a>
							<a href="javascript:void(0)" class="head-action-search">検索する</a>
						</div>
						<div class="sns-btn">
							<a href="https://twitter.com/share" target="_blank" class="btn-tw">Twitter</a>
							<a href="https://www.facebook.com/sharer/sharer.php?u=http://sickhat.info/"  target="_blank" class="btn-fb">Facebook</a>
						</div>
						<div class="side-banner">
							<a href="javascript:void(0)" class="head-action-create"><img src="<?php bloginfo('template_directory'); ?>/img/common/side_banner.png" alt=""></a>
						</div>
					</div>
					

					<div class="modal-wrapper modal-wrapper--search">
						<div class="modal-bar"><?php echo do_shortcode('[bbp-search]'); ?></div>
						<div class="modal-close"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/common/icon_close.png" alt=""></div>
						<div class="modal-back"></div>
					</div>

					<div class="modal-wrapper modal-wrapper--forum">
						<div class="modal-ttl">カテゴリーを選んでください</div>
						<div class="modal-forum"><?php echo do_shortcode('[bbp-forum-index]'); ?></div>
						<div class="modal-close"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/common/icon_close.png" alt=""></div>
						<div class="modal-back"></div>
					</div>



				</div>
			</div><!-- #bbp-topic-wrapper-<?php bbp_topic_id(); ?> -->

		<?php endwhile; ?>

	<?php elseif ( bbp_is_forum_private( bbp_get_topic_forum_id(), false ) ) : ?>

		<?php bbp_get_template_part( 'feedback', 'no-access' ); ?>

	<?php endif; ?>

	<?php do_action( 'bbp_after_main_content' ); ?>

<?php get_footer(); ?>

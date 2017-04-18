<?php get_header(); ?>

		<section class="main-search">
			<h2 class="site-ttl"><a href="<?php echo home_url() ?>"><img src="<?php bloginfo('template_directory'); ?>/img/common/logo.png" alt=""></a></h2>
			<h1 class="main-ttl">同じ病気の人と出会えるサイト</h1>
			<?php echo do_shortcode('[bbp-search]'); ?>
			<nav class="top-nav">
				<a href="<?php echo home_url() ?>">TOPへ</a>
				<a href="javascript:void(0)" class="head-action-create">カテゴリー覧</a>
				<a href="javascript:void(0)" class="close">病気一覧</a>
				<a href="javascript:void(0)" class="close">このサイトについて</a>
				<a href="javascript:void(0)" class="close">メッセージ</a>
			</nav>
		</section>

		<div class="modal-wrapper modal-wrapper--forum">
			<div class="modal-ttl">カテゴリーを選んでください</div>
			<div class="modal-forum"><?php echo do_shortcode('[bbp-forum-index]'); ?></div>
			<div class="modal-close"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/common/icon_close.png" alt=""></div>
			<div class="modal-back"></div>
		</div>
		
<?php get_footer(); ?>
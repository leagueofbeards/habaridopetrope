<?php namespace Habari; ?>
<?php $theme->display('header'); ?>
<body class="homepage">
	<div id="header-wrapper">
		<div class="container">
			<div class="row">
				<div class="12u">
					<section id="banner">
						<a href="<?php echo $theme->newest()->permalink; ?>">
							<span class="image image-full"><img src="<?php Site::out_url('theme'); ?>/images/pic01.jpg" alt="" /></span>
							<header>
								<h2>Howdy, this is Sillyness.</h2>
								<span class="byline">Latest Article: <?php echo $theme->newest()->title_out; ?></span>
							</header>
						</a>
					</section>
				</div>
			</div>
			<?php $theme->display('nav'); ?>
		</div>
	</div>
</div>
<!-- Main Wrapper -->
<div id="main-wrapper">
	<div class="container">
		<div class="row">
			<div class="12u">
				<?php $theme->display('portfolio'); ?>
				<?php $theme->display('blog'); ?>
			</div>
		</div>
<?php $theme->display('footer'); ?>
<?php namespace Habari; ?>
<div id="latest" class="row block">
	<div class="12u">
		<section id="banner">
			<a href="<?php echo $theme->newest()->permalink; ?>">
				<span class="image image-full"><img src="<?php echo $theme->newest()->info->header; ?>" alt="" /></span>
				<header>
					<h2>Howdy, this is Sillyness.</h2>
					<span class="byline">Latest Article: <?php echo $theme->newest()->title_out; ?></span>
				</header>
			</a>
		</section>
	</div>
</div>
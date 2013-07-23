<?php namespace Habari; ?>
<div class="row">
	<div class="12u">
		<section>
			<header class="major">
				<h2>Latest Missives</h2>
			</header>
			<div>
				<div class="row">
					<?php foreach( $theme->latest($theme->newest()->id) as $post ) { ?>
					<div class="6u">
						<section class="box">
							<a href="<?php echo $post->permalink; ?>" class="image image-full"><img src="<?php Site::out_url('theme'); ?>/images/pic08.jpg" alt=""></a>
							<header>
								<h3><?php echo $post->title_out; ?></h3>
								<span class="byline">Posted <?php echo $post->pubdate->friendly(1); ?></span>
							</header>
								<p><?php echo $theme->exerptor($post->content_out, 163); ?></p>
							<footer class="actions">
								<a href="<?php echo $post->permalink; ?>" class="button button-icon button-icon-1">Continue Reading</a>
								<a href="<?php echo $post->permalink; ?>#comments" class="button button-alt button-icon button-icon-2"><?php echo $post->comments->count; ?>  comments</a>
							</footer>
						</section>
					</div>
					<?php } ?>
				</div>
			</div>
		</section>
	</div>
</div>
<?php namespace Habari; ?>
<!-- Portfolio -->
<section>
	<header class="major">
		<h2>Latest Dribbbles</h2>
	</header>
	<div>
	<?php $i = 0; foreach( $theme->dribbble() as $shot ) { $i++; ?>
		<?php if( $i == 1 ) { ?>
		<div class="row">
		<?php } ?>
			<div id="shot-<?php echo $shot->id; ?>" class="4u">
				<section class="box">
					<a href="<?php echo $shot->url; ?>" class="image image-full"><img src="<?php echo $shot->image_url; ?>" alt="<?php echo $shot->title; ?>"></a>
					<header><h3><?php echo $shot->title; ?></h3></header>
					<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>					
					<footer>
						<a href="#" class="button"><i class="fontawesome-eye-open"></i> <?php echo $shot->views_count; ?> Views</a>
						<a href="#" class="button button-alt"><i class="fontawesome-heart"></i> <?php echo $shot->likes_count; ?> Likes</a>
					</footer>
				</section>
			</div>
		<?php if( $i % 3 == false ) { $i = 0; ?>
		</div>
		<?php } ?>
	<?php } ?>
	</div>
</section>
</div>
</div>


<?php namespace Habari; ?>
<?php $theme->display('header'); ?>
<body class="right-sidebar">
	<div id="header-wrapper">
		<div class="container">
			<?php $theme->display('nav'); ?>
		</div>
	</div>
<div id="main-wrapper">
	<div class="container">
		<div class="row">
			<div class="12u">
				<!-- Portfolio -->
					<section>
						<div>
							<div class="row">
								<div class="8u skel-cell-mainContent">
									<!-- Content -->
										<article class="box is-post">
											<span class="image image-full"><img src="<?php echo $post->info->header; ?>" alt=""></span>
											<header>
												<h2><?php echo $post->title_out; ?> <?php if( $loggedin) { ?><small style="float:right;font-size:20px;"><a href="<?php URL::out('display_editor'); ?>/<?php echo $post->id; ?>" title="Edit <?php echo $post->title; ?>"><i class="fontawesome-edit"></i></a></small><?php } ?></h2>
											</header>
											<?php echo $post->content_out; ?>
										</article>
										<article class="box">
											<div id="disqus_thread"></div>
										</article>
								</div>
								<div class="4u">
										<section class="box">
											<p><strong>Written on <?php echo $post->pubdate->out('M, d Y'); ?> by <?php echo $post->author->displayname; ?><?php if( count($post->tags) > 0 ) { ?> and tagged with <?php echo $theme->t_and_l($post->tags); ?><?php } ?>.</strong></p>
											<h3>Recent Posts</h3>
											<br>
											<ul class="divided">
												<?php foreach( $theme->recent($post->id) as $recent ) { ?>
												<li><a href="<?php echo $recent->permalink; ?>" title="<?php echo $recent->title_out; ?>"><?php echo $recent->title_out; ?></a></li>
												<?php } ?>
											</ul>
										</section>
								</div>
							</div>
						</div>
				</section>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var disqus_shortname = 'sillynesswerd';
	(function() {
		var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
		dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	})();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<?php $theme->display('footer'); ?>
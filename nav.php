<?php namespace Habari; ?>
<div id="nav" class="row block">
	<div class="12u">
		<section id="header">
			<nav id="nav">
				<ul>
					<li class="current_page_item"><a href="<?php Site::out_url('habari'); ?>">Home</a></li>
					<li><a href="<?php URL::out('display_page', array('slug' => 'about')); ?>">About</a></li>
					<li><a href="<?php URL::out('display_page', array('slug' => 'history')); ?>">History</a></li>
					<?php if( $loggedin) { ?><li id="manager"><a href="<?php URL::out('display_editor'); ?>"><i class="fontawesome-plus"></i> New Post</a></li><?php } ?>
				</ul>
			</nav>
		</section>
	</div>
</div>
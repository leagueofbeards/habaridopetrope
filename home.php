<?php namespace Habari; ?>
<?php $theme->display('header'); ?>
<body class="homepage">
	<div id="header-wrapper">
		<section id="header">
			<?php if( $loggedin ) { ?>
			<nav id="nav" class="rearranger">
				<ul>
					<li><a id="reorder" href="<?php Site::out_url('habari'); ?>">Reorder</a></li>
					<li class="current_page_item"><a href="<?php Site::out_url('habari'); ?>">Add Block</a></li>
					<li>
						<select>
							<option>Featured Post</option>
							<option>Dribble Shots</option>
							<option>Excerpts from Blog</option>
						</select>
					</li>
				</ul>
			</nav>
			<?php } ?>
		</section>
		<div class="container">
			<?php $theme->display('latest'); ?>
			<?php $theme->display('nav'); ?>
		</div>
	</div>
	<div id="main-wrapper">
		<div class="container">
			<?php $theme->display('portfolio'); ?>
			<?php $theme->display('blog'); ?>
		</div>
	</div>
<?php $theme->display('footer'); ?>
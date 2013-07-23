<?php namespace Habari; ?>
<!DOCTYPE HTML>
<head>
	<title><?php Options::out('title'); ?> &mdash; <?php if( $request->display_entry ) { echo $post->title; } else { Options::out('tagline'); } ?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,300italic" rel="stylesheet">
	<link href="http://weloveiconfonts.com/api/?family=fontawesome" rel="stylesheet">
		
	<noscript>
		<link rel="stylesheet" href="<?php Site::out_url('theme'); ?>/css/skel-noscript.css">
		<link rel="stylesheet" href="<?php Site::out_url('theme'); ?>/css/style.css">
		<link rel="stylesheet" href="<?php Site::out_url('theme'); ?>/css/style-desktop.css">
	</noscript>
	
	<style>
	[class*="fontawesome-"]:before {
		font-family: 'FontAwesome', sans-serif;
		color: #fff;
		opacity: 0.5;
		margin-right: 5px;
	}
	</style>
		
	<!--[if lte IE 8]><script src="<?php Site::out_url('theme'); ?>/js/html5shiv.js"></script><link rel="stylesheet" href="<?php Site::out_url('theme'); ?>/css/ie8.css" /><![endif]-->
		
	<script type="text/javascript">
		if ( typeof(DPT) == "undefined" ) { DPT = {}; }
		DPT.url = "<?php Site::out_url('habari'); ?>";
		DPT.theme = "<?php Site::out_url('theme'); ?>";
	</script>

	<script src="<?php Site::out_url('theme'); ?>/js/jquery.min.js"></script>
	<script src="<?php Site::out_url('theme'); ?>/js/config.js"></script>
	<script src="<?php Site::out_url('theme'); ?>/js/skel.min.js"></script>
	<script src="<?php Site::out_url('theme'); ?>/js/skel-panels.min.js"></script>
	
	<?php $theme->header(); ?>
</head>
<?php 
namespace Habari;
if( !defined( 'HABARI_PATH' ) ) { 
	die('No direct access');
}

class Dopetrope extends Theme
{
	public function action_theme_activated() {}
	
	public function action_init_theme() {
		Format::apply( 'autop', 'comment_content_out' );
		Format::apply( 'tag_and_list', 'post_tags_out' );
		Format::apply( 'autop', 'post_content_out' );
		Format::apply_with_hook_params( 'more', 'post_content_excerpt', '<p class="more">Continue Reading <span class="arrow">]</span>', '', '' );
	}

	public function action_add_template_vars() {}
	
	public function action_template_header() {}

	public function menu() {}
}
?>

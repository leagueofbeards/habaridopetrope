<?php 
namespace Habari;
if( !defined( 'HABARI_PATH' ) ) { 
	die('No direct access');
}

class Dopetrope extends Theme
{

	const D_CACHE = '36000';
	
	public function action_theme_activated() {}
	
	public function action_init_theme() {
		Format::apply( 'autop', 'comment_content_out' );
		Format::apply_with_hook_params( 'more', 'post_excerpt', '', 100, 0 );
	}

	public function action_add_template_vars() {}
	
	public function action_template_header() {}

	public function dribbble() {
		if ( Cache::has( array('DPT', 'dribbble' ) ) ) {
			$return = Cache::get( array('DPT', 'dribbble' ) );
		} else {
			$url = "http://api.dribbble.com/players/chrisjdavis/shots?per_page=3";
			$r = new RemoteRequest( $url );
			$r->execute();
			$shots = json_decode($r->get_response_body());
			$return = $shots->shots;
			
			Cache::set( array('DPT', 'dribbble' ), $return, self::D_CACHE, true );
			
		}
		
		return $return;
	}
	
	public function newest() {
		return Post::get( array('orderby' => 'pubdate DESC', 'content_type' => Post:: type('entry')) );
	}
	
	public function latest($ignore) {
		return Posts::get( array('orderby' => 'pubdate DESC', 'limit' => 2, 'not:id' => $ignore, 'content_type' => Post:: type('entry')) );
	}
	
	public function recent($ignore) {
		return Posts::get( array('orderby' => 'pubdate DESC', 'limit' => 4, 'not:id' => $ignore, 'content_type' => Post:: type('entry')) );		
	}
	
	public function t_and_l( $terms, $between = ', ', $between_last = null, $sort_alphabetical = false, $linked = true ) {
		$array = array();

		if ( !$terms instanceof Terms ) {
			$terms = new Terms( $terms );
		}

		foreach ( $terms as $term ) {
			$array[$term->term] = $term->term_display;
		}

		if ( $sort_alphabetical ) {
			ksort( $array );
		}

		if ( $between_last === null ) {
			// @locale The default string used between the last two items in a series of tags (one, two, three *and* four).
			$between_last = _t( ' and ' );
		}

		if( $linked == true ) {
			$fn = function($a, $b) {
				return "<span class=\"tag\"><a href=\"" . URL::get("display_entries_by_tag", array( "tag" => $b) ) . "\" rel=\"tag\">" . $a . "</a></span>";
			};
		} else {
			$fn = function($a, $b) {
				return "<span class=\"tag\">" . $a . "</span>";
			};
		}
		
		$array = array_map( $fn, $array, array_keys( $array ) );
		$last = array_pop( $array );
		$out = implode( $between, $array );
		$out .= ( $out == '' ) ? $last : $between_last . $last;
		
		return $out;
	}
	
	public function exerptor($string, $limit, $break = ".", $pad = "...") {
		if(strlen($string) <= $limit) return $string;

		if( false !== ($breakpoint = strpos($string, $break, $limit)) ) {
			if( $breakpoint < strlen($string) - 1 ) {
				$string = strip_tags( $string );
				$string = substr( $string, 0, $breakpoint ) . $pad;
			}
		}
		
		return $string;
	}
}
?>

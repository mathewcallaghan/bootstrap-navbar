<?php
/**
 * @link              https://github.com/mathewcallaghan/bootstrap-navbar
 * @since             1.0.1
 * @package           Bootstrap_Navbar
 *
 * @wordpress-plugin
 * Plugin Name:       Bootstrap Navbar
 * Plugin URI:        https://github.com/mathewcallaghan/bootstrap-navbar
 * Description:       Make a Wordpress menu compatible with Bootstrap 4 (requires Bootstrap 4).
 * Version:           1.0.0
 * Author:            Mathew Callaghan
 * Author URI:        https://mathew.callaghan.xyz/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * GitHub Plugin URI: mathewcallaghan/bootstrap-navbar
 * Text Domain:       bootstrap-navbar
 * Domain Path:       /languages
 */


if ( ! defined( 'WPINC' ) ) {
	die;
}

//dropdown-menu
function submenu_css( $classes, $args, $depth ) {

    $classes[] = 'dropdown-menu';
    return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'submenu_css', 10, 3 );

//nav-item
function navitem_css( $classes, $item, $args, $depth ) {

	foreach ( $item->classes as $value ) {
		
		if ( 'menu-item' === $value && $depth == 0 ) {
			
		$classes[] = 'nav-item';
		
		}
		
		elseif ( 'menu-item-has-children' === $value || 'page_item_has_children' === $value ) {
			
		$classes[] = 'dropdown';
		
		}
		
		elseif ( 'current-menu-item' === $value ) {
			
		$classes[] = 'active';
		
		}		
	
	}

    return $classes;     
}
add_filter( 'nav_menu_css_class', 'navitem_css', 10, 4 );

//nav-link
function navlink_css( $atts, $item, $args, $depth) {

	foreach ( $item->classes as $value ) {		
		
		if ( 'menu-item' === $value && $depth == 0 ) {
			
		$atts['class'] = 'nav-link';
		
		}
		
		if ( 'disabled' === $value ) {
			
		$atts['href'] = '';
		
		}
		
		if ( 'menu-item-has-children' === $value || 'page_item_has_children' === $value ) {
			
		$atts['class'] = 'nav-link dropdown-toggle';
		$atts['data-toggle'] = 'dropdown';
		$atts['aria-haspopup'] = 'true';
		$atts['aria-expanded'] = 'false';
		
		}
		
		if ( 'menu-item' === $value && $depth >= 1 ) {
		
		$atts['class'] = 'dropdown-item';	
			
		}
				
	}

    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'navlink_css', 10, 4 );

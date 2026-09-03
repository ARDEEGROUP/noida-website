<?php
/**
 * Renders a WordPress custom menu (Appearance → Menus, location
 * "Primary Menu") using the same markup as the original design's
 * pill nav with dropdown submenus, so editors can manage the menu
 * from wp-admin instead of editing header.php.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

class Ardee_Nav_Walker extends Walker_Nav_Menu {

	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<ul class="sub-menu">';
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '</ul>';
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$has_children = in_array( 'menu-item-has-children', $item->classes, true );
		$active_class = in_array( 'current-menu-item', $item->classes, true ) || in_array( 'current-menu-ancestor', $item->classes, true ) ? ' active' : '';

		if ( $depth === 0 && $has_children ) {
			$output .= '<li class="has-sub' . $active_class . '"><button type="button" aria-haspopup="true" aria-expanded="false">' . esc_html( $item->title ) . '</button>';
		} elseif ( $depth === 0 ) {
			$output .= '<li><a class="' . trim( 'active' === ltrim( $active_class ) ? 'active' : '' ) . '" href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
		} else {
			$output .= '<li><a class="' . esc_attr( ltrim( $active_class ) ) . '" href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
		}
	}

	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		$output .= '</li>';
	}
}

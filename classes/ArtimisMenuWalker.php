<?php

class ArtimisMenuWalker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth=0, $args=null) {

    }

    function end_lvl(&$output, $depth=0, $args=null) { 

    }

	function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
        if(in_array('current-menu-item', $item->classes)){
            $item->classes[] = 'active';
        }

		$output .= "<li class='" .  implode(" ", $item->classes) . "'>";
 
		if ($item->url && $item->url != '#') {
			$output .= '<a href="' . $item->url . '">';
		} else {
			$output .= '<span>';
		}
 
		$output .= $item->title;
 
		if ($item->url && $item->url != '#') {
			$output .= '</a>';
		} else {
			$output .= '</span>';
		}
	}
    function end_el(&$output, $item, $depth=0, $args=null) { 
        // $output .= "Hello";
    }

    // function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output) { 

    //     $output .= "Hello";
    // }
}
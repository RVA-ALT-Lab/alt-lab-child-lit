<?php
/**
 * ACF Functions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//CHAPTER 

function child_lit_intro(){
	if (get_field('introduction')){

		return '<div class="introduction"><h2>Introduction</h2>' . get_field('introduction') . '</div>';
	}
}

function child_lit_main(){
	if (get_field('main_content')){

		return '<div class="main-content">' . get_field('main_content') . '</div>';
	}
}

function child_lit_evaluation_questions(){
	$html = '';
	if( have_rows('evaluation_questions') ):
		$html = "<div class='questions'><h2>Evaluation Questions</h2><ul>";
	    // Loop through rows.
	    while( have_rows('evaluation_questions') ) : the_row();

	        // Load sub field value.
	        $question = get_sub_field('question');
	        $html .= "<li>{$question}</li>";
	        // Do something...
	    // End loop.
	    endwhile;
	    return $html . "</ul></div>";
		// No value.
		else :
		    // Do something...
		endif;
	}


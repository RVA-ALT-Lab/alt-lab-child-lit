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

		return '<div class="introduction"><h2 class="center-label">Introduction</h2>' . get_field('introduction') . '</div>';
	}
}

function child_lit_main(){
	if (get_field('main_content')){

		return '<div class="main-content"><h2 class="center-label">Main Content</h2>' . get_field('main_content') . '</div>';
	}
}

function child_lit_evaluation_questions(){
	$html = '';
	if( have_rows('evaluation_questions') ):
		$html = "<div class='questions'><h2 class='center-label'>Evaluation Questions</h2><ul>";
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

function child_lit_benefits(){
	if(get_field('benefits')){
		return '<div class="benefits"><h2 class="center-label">Benefits</h2>' . get_field('benefits') . '</div>';
	}
}

function child_lit_book_list(){
	$html = '';
	if( have_rows('book_list') ):
		$html = "<div class='books-list'><h2 class='center-label'>Books</h2><ul>";
	    // Loop through rows.
	    while( have_rows('book_list') ) : the_row();

	        // Load sub field value.
	        $book = get_sub_field('book');
	        $html .= "<li>{$book}</li>";
	        // Do something...
	    // End loop.
	    endwhile;
	    return $html . "</ul></div>";
		// No value.
		else :
		    // Do something...
		endif;
	}

function child_lit_additions(){
	if(get_field('additional_information')){
		return '<div class="info"><h2 class="center-label">Additional Information</h2>' . get_field('additional_information') . '</div>';
	}
}

function child_lit_references(){
	$html = '';
	if( have_rows('references') ):
		$html = "<div class='references'><h2 class='center-label'>References</h2><ul>";
	    // Loop through rows.
	    while( have_rows('references') ) : the_row();

	        // Load sub field value.
	        $ref = get_sub_field('reference');
	        $html .= "<li>{$ref}</li>";
	        // Do something...
	    // End loop.
	    endwhile;
	    return $html . "</ul></div>";
		// No value.
		else :
		    // Do something...
		endif;
	}


function child_lit_book_resources($id){

	$html = '';
		if( have_rows('book_resources', $id) ):
			$html .= '<div class="book-resources"><h2 class="center-label">Resources</h2>';
		    // Loop through rows.
		    while( have_rows('book_resources', $id) ) : the_row();

		        // Load sub field value.
		        $name = get_sub_field('resource_title');
		        $link = get_sub_field('resource_link');
		        $image = get_sub_field('resource_image');
		        $type = get_sub_field('resource_type');
		        $image_url = $image['sizes']['medium'];
		        $html .= "<div class='book-resource'><a href='{$link}'><div class='book-cover'><img class='img-fluid cover' src='{$image_url}' ></div><div class='row'><div class='col-sm-12 book-icon'>{$type}<div class='col-sm-12 book-resource-title'>{$name}</div></div></div></a></div>";
		        // Do something...
		    // End loop.
		    endwhile;
		    return $html . '</div>';
			// No value.
			else :
			    // Do something...
			endif;
	}


function child_lit_extra_license(){
	global $post;
	$post_id = $post->ID;
	$license = get_field('license');	
	echo $license;
}





<?php
/**
 * Plugin Name: Remove Unwanted P tags
 * Author: Umang Bhanvadia
 * Version: 1.0
 * Description: It will remove auto generated p tags in wordpress content.
 */

function ub_remove_empty_paragraphs( $content ) {
   $content = preg_replace( '#<p>\s*</p>#', '', $content );
   return $content;
}
add_filter( 'the_content', 'ub_remove_empty_paragraphs', 11 );
?>
<?php 
/*
    Plugin Name: Simple Image SEO
    Description: Permite mostrar el titulo y el texto alternativo de cada imagen, para las imagenes destacadas y las imagenes que son añadidos con ACF.
    Tags: Images, Images SEO, SEO images, Simple Image SEO
    Author: Miguel Fuentes
    Author URI: https://kodewp.com
    Version: 1.0
    Requires PHP: 5.2
    License: GPL v2 or later
*/

if (!defined('ABSPATH')) exit;

// Image SEO ACF
function wp_image_seo_acf($image_url, $image_class='', $image_alt='', $image_title=''){
    $image_id = attachment_url_to_postid( $image_url );
    if($image_alt==''){
        $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', TRUE);
    }
    if($image_title==''){
        $image_title = get_the_title( $image_id );
    }
    $image = '<img src="'.$image_url.'" class="'.$image_class.'" title="'.$image_title.'" alt="'.$image_alt.'">';
    return $image;
}

// Image SEO THUMBNAIL
function wp_image_seo_thumbnail($image_sizes, $image_class=''){
    if ( has_post_thumbnail() ) {
        $image_id = get_post_thumbnail_id();
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
        $image_title = get_the_title($image_id);
        the_post_thumbnail( '' .$image_sizes. '', array( 'class' => '' .$image_class. '', 'title' => ''. $image_title .'', 'alt' => ''. $image_alt .'' ) );
    }
}
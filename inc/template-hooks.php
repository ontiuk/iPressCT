<?php

/**
 * iPress - WordPress Theme Framework						
 * ==========================================================
 *
 * Theme template hooks - actions and filters.
 * 
 * @package		iPress\Includes
 * @link		http://ipress.uk
 * @license		GPL-2.0+
 */

//----------------------------------------------
//	Core Actions & Filters
//----------------------------------------------

//------------------------------------------
//  General
//------------------------------------------

/**
 * @see ipress_loader
 */
add_action( 'wp_body_open', 				'ipress_loader', 				10 );

/**
 * @see  ipress_skip_links()
 * @see  ipress_get_sidebar()
 * @see  ipress_scroll_top()
 */
add_action( 'wp_body_open', 				'ipress_skip_links',			12 );
add_action( 'ipress_sidebar',				'ipress_get_sidebar',			10 );
add_action( 'ipress_before_footer',			'ipress_scroll_top', 			10 );
	    
/**
 * @see ipress_breadcrumbs()
 */
add_action( 'ipress_before_main_content', 	'ipress_breadcrumbs', 			10 );

/**
 * Front page hero section
 */
add_action( 'ipress_before_main_content', 	'ipress_hero', 					20 );

//------------------------------------------
//  Header
//------------------------------------------

/**
 * @see  ipress_site_branding()
 * @see  ipress_primary_navigation()
 */
add_action( 'ipress_header',				'ipress_site_branding',			10 );
add_action( 'ipress_header',				'ipress_primary_navigation',	20 );

//------------------------------------------
//  Footer
//------------------------------------------

/**
 * @see  ipress_footer_widgets()
 * @see  ipress_credit()
 */
add_action( 'ipress_footer',				'ipress_footer_widgets',		10 );
add_action( 'ipress_footer',				'ipress_credit_info',			20 );

//------------------------------------------
//  Posts
//------------------------------------------

/**
 * @see  ipress_loop_header()
 * @see  ipress_loop_meta()
 * @see  ipress_loop_content()
 * @see  ipress_loop_footer()
 * @see  ipress_loop_thumbnail()
 * @see  ipress_loop_nav()
 */
add_action( 'ipress_loop',					'ipress_loop_header',			10 );
add_action( 'ipress_loop',					'ipress_loop_meta',				20 );
add_action( 'ipress_loop',					'ipress_loop_content',			30 );
add_action( 'ipress_loop',					'ipress_loop_footer',			40 );

add_action( 'ipress_loop_content_before',	'ipress_loop_thumbnail',		10 );
add_action( 'ipress_loop_after',			'ipress_loop_nav',				10 );

/**
 * @see  ipress_loop_header()
 * @see  ipress_loop_meta()
 * @see  ipress_loop_excerpt()
 * @see  ipress_loop_footer()
 */        
add_action( 'ipress_loop_excerpt', 			'ipress_loop_header',          	10 );
add_action( 'ipress_loop_excerpt',			'ipress_loop_meta',				20 );
add_action( 'ipress_loop_excerpt', 			'ipress_loop_excerpt', 			23 );
add_action( 'ipress_loop_excerpt',			'ipress_loop_footer',			40 );

//------------------------------------------
//  Single
//------------------------------------------

/**
 * @see  ipress_single_header()
 * @see  ipress_single_meta()
 * @see  ipress_single_content()
 * @see  ipress_single_footer()
 * @see  ipress_single_edit_link()
 * @see  ipress_display_comments()
 * @see  ipress_single_nav()
 * @see  ipress_single_image
 */
add_action( 'ipress_single',				'ipress_single_header',			10 );
add_action( 'ipress_single',		  		'ipress_single_meta',			20 );
add_action( 'ipress_single',		  		'ipress_single_content',			30 );
add_action( 'ipress_single',		  		'ipress_single_footer',			40 );

add_action( 'ipress_single_bottom',			'ipress_single_edit_link',		10 )
add_action( 'ipress_single_bottom',			'ipress_display_comments',		20 );
	
add_action( 'ipress_article_after',  		'ipress_single_nav',			20 );
add_action( 'ipress_post_content_before',	'ipress_single_image',			10 );

//------------------------------------------
//  Page
//------------------------------------------

/**
 * @see  ipress_page_header()
 * @see  ipress_page_content()
 * @see  ipress_page_edit_page_link()
 * @see  ipress_display_comments()
 * @see  ipress_page_image
 */
add_action( 'ipress_page',					'ipress_page_header',			10 );
add_action( 'ipress_page',					'ipress_page_content',			20 );
add_action( 'ipress_page',					'ipress_edit_page_link',		30 );

add_action( 'ipress_article_after',			'ipress_display_comments',		10 );
add_action( 'ipress_page_content_before',	'ipress_page_image',			10 );

//------------------------------------------
//  Attachment
//------------------------------------------

/**
 * @see  ipress_attachment_header()
 * @see  ipress_attachment_content()
 */
add_action( 'ipress_attachment',			'ipress_attachment_header',		10 );
add_action( 'ipress_attachment',			'ipress_attachment_content',	20 );

//------------------------------------------
//  Privacy Policy
//------------------------------------------

/**
 * @see  ipress_page_header()
 * @see  ipress_privacy()
 * @see  ipress_edit_page_link()
 */
add_action( 'ipress_privacy',				'ipress_page_header',			10 );
add_action( 'ipress_privacy',				'ipress_privacy_content',		20 );
add_action( 'ipress_privacy',				'ipress_edit_page_link',		30 );

//------------------------------------------
//  Search
//------------------------------------------

/**
 * @see  ipress_loop_header()
 * @see  ipress_loop_meta()
 * @see  ipress_loop_excerpt()
 * @see  ipress_loop_footer()
 */        
add_action( 'ipress_search',				'ipress_loop_header',			10 );
add_action( 'ipress_search',				'ipress_loop_meta',				20 );
add_action( 'ipress_search',				'ipress_loop_excerpt',			30 );
add_action( 'ipress_search',				'ipress_loop_footer',			40 );

//------------------------------------------
//  Homepage
//------------------------------------------

//End

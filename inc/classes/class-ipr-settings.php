<?php

/**
 * iPress - WordPress Theme Framework
 * ==========================================================
 *
 * Theme settings functionality via customizer.
 *
 * @package iPress\Includes
 * @link    http://ipress.uk
 * @license GPL-2.0+
 */

// Deny unauthorised access
defined( 'ABSPATH' ) ||	exit;

if ( ! class_exists( 'IPR_Settings' ) ) :

	/**
	 * Set up customizer settings
	 */
	final class IPR_Settings extends IPR_Registry {

		/**
		 * Class constructor, protected, set hooks
		 */
		protected function __construct() {

			// Hook into parent theme settings
			add_action( 'ipress_customize_register', [ $this, 'parent_customize_register' ] );

			// Theme customizer custom JS registration
			add_action( 'customize_register', [ $this, 'customize_register_js' ] );

			// Theme customizer api registration
			add_action( 'customize_register', [ $this, 'customize_register_theme' ] );

			// Theme customizer api registration
			add_action( 'customize_register', [ $this, 'customize_register_partials' ], 12 );

			// Enqueue scripts for customizer controls and settings
			add_action( 'customize_controls_enqueue_scripts', [ $this, 'customize_controls_enqueue_scripts' ] );

			// Enqueue scripts for customizer preview
			add_action( 'customize_preview_init', [ $this, 'customize_preview_init' ] );
		}

		//----------------------------------------------
		//	Customizer Register Core Settings
		//----------------------------------------------

		/**
		 * Register customizer settings via parent theme action
		 *
		 * @param object $wp_customize WP_Customise_Manager
		 */
		public function parent_customize_register( WP_Customize_Manager $wp_customize ) {

			// Custom background & header usage?
			$ip_custom_background = (bool) apply_filters( 'ipress_custom_background', false );
			$ip_custom_header = (bool) apply_filters( 'ipress_custom_header', false );

			// Option defaults
			$defaults = ipress_get_defaults();

			// Modify background section if custom background available
			if ( true === $ip_custom_background ) {

				// Change background image section title & priority if custom background image is active
				$wp_customize->get_section( 'background_image' )->title    = __( 'Background', 'ipress-child' );
				$wp_customize->get_section( 'background_image' )->priority = 30;

				// Move background color setting alongside background image if custom background image is active
				$wp_customize->get_control( 'background_color' )->section  = 'background_image';
				$wp_customize->get_control( 'background_color' )->priority = 20;
			}

			// Change header image section title & priority if custom header image is active
			if ( true === $ip_custom_header ) {
				$wp_customize->get_section( 'header_image' )->title    = __( 'Header', 'ipress-child' );
				$wp_customize->get_section( 'header_image' )->priority = 25;
			}

			// Change the default priority if custom header or background is available
			if ( true === $ip_custom_header || true === $ip_custom_background ) {
				$wp_customize->get_section( 'colors' )->priority = 90;
			}

			//----------------------------------------------
			//	Sections
			//----------------------------------------------

			// Add a footer/copyright information section.
			$wp_customize->add_section(
				'ipress_footer',
				[
					'title'       => __( 'Footer', 'ipress-child' ),
					'description' => esc_html__( 'Footer content', 'ipress-child' ),
					'priority'    => 150, // Before Default & After Front Page.
				]
			);

			//----------------------------------------------
			//	Settings & Controls
			//----------------------------------------------

			// Add a retina logo option
			$wp_customize->add_setting(
				'ipress_settings[retina_logo]',
				[
					'default' => $defaults['retina_logo'],
					'type' => 'option',
					'sanitize_callback' => 'esc_url_raw',
				]
			);

			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'ipress_settings[retina_logo]',
					[
						'label' => __( 'Retina Logo', 'ipress-child' ),
						'section' => 'title_tagline',
						'settings' => 'ipress_settings[retina_logo]',
						'priority' => 15,
						'active_callback' => function() {
							return get_theme_mod( 'custom_logo' ) ? true : false;
						}
					]
				)
			);

			// Add 'title_and_tagline' setting for displaying the site-title & tagline +/- logo.
			$wp_customize->add_setting(
				'ipress_settings[title_and_tagline]',
				[
					'default'			=> $defaults['title_and_tagline'],
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'default'           => true,
					'sanitize_callback' => 'ipress_sanitize_checkbox',			
				]
			);

			// Add control for the "display_title_and_tagline" setting.
			$wp_customize->add_control(
				'ipress_settings[title_and_tagline]',
				[
					'type'    => 'checkbox',
					'section' => 'title_tagline',
					'label'   => esc_html__( 'Display Site Title & Tagline', 'ipress-child' ),
				]
			);

			// Plugable registrations - pass customizer manager object to child theme settings filter
			do_action( 'ipress_parent_customize_register', $wp_customize );
		}

		/**
		 * Set up customizer custom JS settings
		 *
		 * @param object $wp_customize WP_Customise_Manager
		 */
		public function customize_register_js( WP_Customize_Manager $wp_customize ) {

			// Filterable custom JS sections, default false
			$ip_custom_js = (bool) apply_filters( 'ipress_custom_js', false );
			if ( true !== $ip_custom_js ) {
				return;
			}

			// Option defaults
			$defaults = ipress_get_defaults();

			// Add section for additional scripts: header & footer
			$wp_customize->add_section(
				'ipress_custom_js',
				[
					'title'       => __( 'Additional JS', 'ipress-child' ),
					'description' => esc_html__( 'Add custom header & footer js.', 'ipress-child' ),
					'priority'    => 210,
				]
			);

			// Add settings for custom header scripts section
			$wp_customize->add_setting(
				'ipress_settings[header_js]',
				[
					'default'			=> $defaults['header_js'],
					'transport'         => 'refresh',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'wp_kses_post',
				]
			);

			// Add control for custom header scripts section
			$wp_customize->add_control(
				new WP_Customize_Code_Editor_Control(
					$wp_customize,
					'ipress_settings[header_js]',
					[
						'label'       => __( 'Custom header JS', 'ipress-child' ),
						'description' => esc_html__( 'Custom inline header js. Exclude <script></script> tag.', 'ipress-child' ),
						'code_type'   => 'javascript',
						'section'     => 'ipress_custom_js',
						'settings'    => 'ipress_settings[header_js]',
						'priority'    => 10,
					]
				)
			);

			// Add settings and controls for custom scripts section
			$wp_customize->add_setting(
				'ipress_settings[footer_js]',
				[
					'default'			=> $defaults['footer_js'],
					'transport'         => 'refresh',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'wp_kses_post',
				]
			);

			// Add control for custom footer scripts section
			$wp_customize->add_control(
				new WP_Customize_Code_Editor_Control(
					$wp_customize,
					'ipress_settings[footer_js]',
					[
						'label'       => __( 'Custom footer JS', 'ipress-child' ),
						'description' => esc_html__( 'Custom inline footer js. Exclude <script></script> tag.', 'ipress-child' ),
						'code_type'   => 'javascript',
						'section'     => 'ipress_custom_js',
						'settings'    => 'ipress_settings[footer_js]',
						'priority'    => 12,
					]
				)
			);

			// Add settings and controls for custom scripts section
			$wp_customize->add_setting(
				'ipress_settings[header_admin_js]',
				[
					'default'			=> $defaults['header_admin_js'],
					'transport'         => 'refresh',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'wp_kses_post',
				]
			);

			// Add controls for custom header admin scripts section
			$wp_customize->add_control(
				new WP_Customize_Code_Editor_Control(
					$wp_customize,
					'ipress_settings[header_admin_js]',
					[
						'label'       => __( 'Custom admin header JS', 'ipress-child' ),
						'description' => esc_html__( 'Custom inline admin header js. Exclude <script></script> tag.', 'ipress-child' ),
						'code_type'   => 'javascript',
						'section'     => 'ipress_custom_js',
						'settings'    => 'ipress_settings[header_admin_js]',
						'priority'    => 14,
					]
				)
			);

			// Add settings and controls for custom scripts section
			$wp_customize->add_setting(
				'ipress_settings[footer_admin_js]',
				[
					'default'			=> $defaults['footer_admin_js'],
					'transport'         => 'refresh',
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'wp_kses_post',
				]
			);

			// Add controls for custom footer admin scripts section
			$wp_customize->add_control(
				new WP_Customize_Code_Editor_Control(
					$wp_customize,
					'ipress_settings[footer_admin_js]',
					[
						'label'       => __( 'Custom admin footer JS', 'ipress-child' ),
						'description' => esc_html__( 'Custom inline admin footer js. Exclude <script></script> tag.', 'ipress-child' ),
						'code_type'   => 'javascript',
						'section'     => 'ipress_custom_js',
						'settings'    => 'ipress_settings[footer_admin_js]',
						'priority'    => 16,
					]
				)
			);

			// Plugable registrations - pass customizer manager object to child theme settings filter
			do_action( 'ipress_customize_register_js', $wp_customize );
		}

		/**
		 * Set up customizer and theme specific settings
		 * - Fonts & typography
		 * - Background & header colours
		 * - Button and text colours
		 *
		 * @param object $wp_customize WP_Customise_Manager
		 */
		public function customize_register_theme( WP_Customize_Manager $wp_customize ) {

			// Define settings & partials based on if selective refresh is active
			$transport = ( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

			// Option defaults
			$defaults = ipress_get_defaults();

			// Add the primary theme section. Won't show until settings & controls added
			$wp_customize->add_section(
				'ipress_theme',
				[
					'title'       => __( 'Theme', 'ipress-child' ),
					'description' => esc_html__( 'Add theme specific settings.', 'ipress-child' ),
					'capability'  => 'edit_theme_options',
					'priority'    => 250,
				]
			);

			// ----------------------------------------------
			// Theme setting: breadcrumbs
			// ----------------------------------------------

			// Add setting for breadcrumbs
			$wp_customize->add_setting(
				'ipress_settings[breadcrumbs]',
				[
					'default'			=> $defaults['breadcrumbs'],
					'transport'         => $transport,
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'default'           => false,
					'sanitize_callback' => 'ipress_sanitize_checkbox',
				]
			);

			// Add checkbox control for breadcrumbs setting
			$wp_customize->add_control(
				'ipress_settings[breadcrumbs]',
				[
					'label'       => __( 'Breadcrumbs', 'ipress-child' ),
					'description' => esc_html__( 'Display or hide the inner page breadcrumbs.', 'ipress-child' ),
					'type'        => 'checkbox',
					'section'     => 'ipress_theme',
					'priority'    => 20,
				]
			);

			// ----------------------------------------------
			// Theme setting: back_to_top
			// ----------------------------------------------

			// Add setting for back to top link
			$wp_customize->add_setting(
				'ipress_settings[back_to_top]',
				[
					'default'			=> $defaults['back_to_top'],
					'transport'         => $transport,
					'type'              => 'option',
					'capability'        => 'edit_theme_options',
					'default'           => false,
					'sanitize_callback' => 'ipress_sanitize_checkbox',
				]
			);

			// Add checkbox control for back to top setting
			$wp_customize->add_control(
				'ipress_settings[back_to_top]',
				[
					'label'       => __( 'Back To Top', 'ipress-child' ),
					'description' => esc_html__( 'Display or hide the back to top link.', 'ipress-child' ),
					'type'        => 'checkbox',
					'section'     => 'ipress_theme',
					'priority'    => 30,
				]
			);

			// Section separator
			$wp_customize->add_setting(
				'ipress_breadcrumbs_sep',
				[ 'sanitize_callback' => '__return_true' ]
			);

			$wp_customize->add_control(
				new IPR_Separator_Control(
					$wp_customize,
					'ipress_breadcrumbs_sep',
					[
						'section'  => 'ipress_theme',
						'priority' => 100,
					]
				)
			);

			// ----------------------------------------------
			// Theme settings
			// ----------------------------------------------

			// Plugable registrations - pass customizer manager object to child theme settings filter
			do_action( 'ipress_customize_register_theme', $wp_customize );
		}

		/**
		 * Set up customizer and theme partials
		 *
		 * @param object $wp_customize WP_Customise_Manager
		 */
		public function customize_register_partials( WP_Customize_Manager $wp_customize ) {

			// Abort if selective refresh is not available.
			if ( ! isset( $wp_customize->selective_refresh ) ) {
				return;
			}

			// ----------------------------------------------
			// Theme partials
			// ----------------------------------------------

			// Plugable registrations - pass customizer manager object to child theme settings filter
			do_action( 'ipress_customize_register_partials', $wp_customize );
		}

		//----------------------------------------------
		// Load Control and Preview Scripts & Styles
		//----------------------------------------------

		/**
		 * Enqueue scripts for the customizer settings & controls
		 */
		public function customize_controls_enqueue_scripts() {
			$theme_version = wp_get_theme()->get( 'Version' );
			wp_enqueue_script( 'ipress-customize', IPRESS_CHILD_ASSETS_URL . '/js/customize.js', [ 'jquery' ], $theme_version, false );
			wp_enqueue_script( 'ipress-customize-controls', IPRESS_CHILD_ASSETS_URL . '/js/customize-controls.js', [ 'customize-controls', 'underscore', 'jquery' ], $theme_version, false );
		}

		/**
		 * Enqueue scripts for the customizer preview
		 */
		public function customize_preview_init() {
			$theme_version = wp_get_theme()->get( 'Version' );
			wp_enqueue_script( 'ipress-customize-preview', IPRESS_CHILD_ASSETS_URL . '/js/customize-preview.js', [ 'customize-preview', 'customize-selective-refresh', 'jquery' ], $theme_version, true );
		}
	}

endif;

// Instantiate Theme Settings Class
return IPR_Settings::Init();

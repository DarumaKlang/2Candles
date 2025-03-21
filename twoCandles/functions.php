<?php
/**
 * 2Candles functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage 2Candles
 * @since 2Candles 1.0
 */

// Adds theme support for post formats.
if ( ! function_exists( 'twoCandles_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since 2Candles 1.0
	 *
	 * @return void
	 */
	function twoCandles_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;

add_action( 'after_setup_theme', 'twoCandles_post_format_setup' );

function twoCandles_slug_setup() {
    add_theme_support( 'wp-block-styles' );
}

add_action( 'after_setup_theme', 'twoCandles_slug_setup' );

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'twoCandles_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since 2Candles 1.0
	 *
	 * @return void
	 */
	function twoCandles_editor_style() {
		add_editor_style( get_parent_theme_file_uri( 'assets/css/editor-style.css' ) );
	}
endif;

add_action( 'after_setup_theme', 'twoCandles_editor_style' );

// Enqueues style.css on the front.
if ( ! function_exists( 'twoCandles_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since 2Candles 1.0
	 *
	 * @return void
	 */
	function twoCandles_enqueue_styles() {
		wp_enqueue_style(
			'twoCandles-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'twoCandles_enqueue_styles' );

// Registers custom block styles.
if ( ! function_exists( 'twoCandles_block_styles' ) ) :

    /**
     * Registers custom block styles.
     *
     * @since 2Candles 1.0
     *
     * @return void
     */
    function twoCandles_block_styles() {
        register_block_style(
            'core/list',
            array(
                'name'         => 'checkmark-list',
                'label'        => __( 'Checkmark', 'twoCandles' ),
                'inline_style' => '
                ul.is-style-checkmark-list {
                    list-style-type: "\2713";
                }

                ul.is-style-checkmark-list li {
                    padding-inline-start: 1ch;
                }',
            )
        );  
    }
endif;

add_action( 'init', 'twoCandles_block_styles' );

// Registers pattern categories.
if ( ! function_exists( 'twoCandles_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since 2Candles 1.0
	 *
	 * @return void
	 */
	function twoCandles_pattern_categories() {

		register_block_pattern_category(
			'twoCandles_page',
			array(
				'label'       => __( 'Pages', 'twoCandles' ),
				'description' => __( 'A collection of full page layouts.', 'twoCandles' ),
			)
		);

		register_block_pattern_category(
			'twoCandles_post-format',
			array(
				'label'       => __( 'Post formats', 'twoCandles' ),
				'description' => __( 'A collection of post format patterns.', 'twoCandles' ),
			)
		);
	}
endif;

add_action( 'init', 'twoCandles_pattern_categories' );

// Registers block binding sources.
if ( ! function_exists( 'twoCandles_register_block_bindings' ) ) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since 2Candles 1.0
	 *
	 * @return void
	 */
	function twoCandles_register_block_bindings() {
		register_block_bindings_source(
			'twoCandles/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'twoCandles' ),
				'get_value_callback' => 'twoCandles_format_binding',
			)
		);
	}
endif;

add_action( 'init', 'twoCandles_register_block_bindings' );

// Registers block binding callback function for the post format name.
if ( ! function_exists( 'twoCandles_format_binding' ) ) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since 2Candles 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function twoCandles_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
endif;
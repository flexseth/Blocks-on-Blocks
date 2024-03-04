<?php
/*
 * Plugin Name: Paragraph Block to Post or Page Excerpt
 * Requires at least: 5.0
 */

 // Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

 /**
 * Enqueue Editor assets.
 * @see https://developer.wordpress.org/block-editor/how-to-guides/enqueueing-assets-in-the-editor/#scenarios-for-enqueuing-assets
 */
// function paragraph_as_excerpt_enqueue_editor_assets() {
//     wp_enqueue_script(
//         'paragraph-as-excerpt-editor-scripts',
//         plugins_url( 'editor-scripts.js', __FILE__ )
//     );
//     wp_enqueue_style(
//         'paragraph-as-excerpt-editor-styles',
//         plugins_url( 'editor-styles.css', __FILE__ ) 
//     );
// }
// add_action( 'enqueue_block_editor_assets', 'paragraph_as_excerpt_enqueue_editor_assets' );

/**
 * @see https://developer.wordpress.org/block-editor/getting-started/devenv/get-started-with-wp-scripts/#enqueuing-assets
 */
/**
 * Enqueue Editor assets.
 */
function paragraph_as_excerpt_enqueue_editor_assets() {
    $asset_file = include( plugin_dir_path( __FILE__ ) . 'build/index.asset.php');

    wp_enqueue_script(
        'paragraph-as-excerpt-editor-scripts',
        plugins_url( 'build/index.js', __FILE__ ),
        $asset_file['dependencies'],
        $asset_file['version']
    );
}
add_action( 'enqueue_block_editor_assets', 'paragraph_as_excerpt_enqueue_editor_assets' );
<?php
/**
 * Plugin Name: Neobabis Gutenberg Block Patterns
 * Plugin URI: https://createmysite.gr/
 * Author: Neokazis Charalampos
 * Description: A simple tutorial plugin to show how to add Block Patterns to Gutenberg.
 * Version: 1.0
 */

function neobabis_register_block_patterns()
{
    if (function_exists('register_block_pattern')) {
        /**
         * Register block patterns
         */
        register_block_pattern(
            'neobabis-gutenberg-block-patterns/three-columns-of-text',
            array(
                'title'   => __('Tree columns of text', 'neobabis-gutenberg-block-patterns'),
                // 'description' => _x( 'Here a simple description', 'Block pattern description', 'neobabis-gutenberg-block-patterns' ),
                'categories' => array( 'text' ),
                'content' => "<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, tempor cubilia nulla posuere ultricies tortor ultrices, luctus leo dis sollicitudin sagittis fames.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, tempor cubilia nulla posuere ultricies tortor ultrices, luctus leo dis sollicitudin sagittis fames.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, tempor cubilia nulla posuere ultricies tortor ultrices, luctus leo dis sollicitudin sagittis fames.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
            )
        );
    }
}
add_action('init', 'neobabis_register_block_patterns');

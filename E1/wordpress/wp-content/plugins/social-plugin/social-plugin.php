<?php
/*
 * Plugin Name: Social Button
 */

function sb_footer () {
    ?>
    <div class='social-overlay'>
        <div class='social-button'>
            <a href='#' class="social-icon fb-icon"><i class="fab fa-facebook-f"></i></a>
            <a href='#' class="social-icon pint-icon"><i class="fab fa-pinterest"></i></a>
            <a href='#' class="social-icon tw-icon"><i class="fab fa-twitter"></i></a>
            <a href='#' class="social-icon tumblr-icon"><i class="fab fa-tumblr"></i></a>
        </div>
    </div>
    <?php
}

function sb_scripts () {
    wp_enqueue_style('sb-fa', plugins_url('fontawesome/css/all.css',__FILE__));
    wp_enqueue_style('sb-style', plugins_url('style.css',__FILE__));
}

add_action('wp_footer', 'sb_footer');

add_action('wp_enqueue_scripts', 'sb_scripts');
<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

global $hb_settings;
$prices = hb_room_get_selected_plan(get_the_ID());
$prices = isset($prices->prices) ? $prices->prices : array();
if ($prices) {
    $min_price = is_numeric(min($prices)) ? min($prices) : 0;
}
$meta = get_post_meta(get_the_ID(), "_hb_room_addition_information", true);
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (!twentynineteen_can_show_post_thumbnail()) : ?>
        <header class="entry-header">
            <?php get_template_part('template-parts/header/entry', 'header'); ?>
        </header>
    <?php endif; ?>
    <?php the_post_thumbnail(); ?>

    <div class="title_content"><?php the_title(); ?></div>
    <div class="short_meta">
        <p class="short_meta_title"><?php the_title(); ?></p>
        <p class="short_meta_description"><?php echo $meta ?></p>
        <?php if ($min_price): ?>
            <p class="short_meta_price">From <span class="short_meta_price_quantity">$ <?php echo $min_price; ?></span></p>
        <?php endif; ?>
        <button class="check_btn" href="#">CHECK AVAILABILITY</button>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->

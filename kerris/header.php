<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kerris
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container">
        <header class="hero">

            <div class="hero__wrapper">
                <div class="hero__logo">
                    <?php
					the_custom_logo();
					?>
                </div>
                <div class="hero__right">
                    <?php 
                $image = get_field('hero_image');
                if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" ;>
                    <?php endif; ?>
                </div>
                <div class=" hero__margin"></div>
                <div class="hero__left">
                    <div class="hero__body">
                        <h1><?php the_title(); ?></h1>
                        <div class="hero__text">
                            <?php the_field('description'); ?>
                            <img class="hero__dots" src="<?php echo get_template_directory_uri(); ?>/img/ico/ovals.svg"
                                alt="">
                        </div>
                        <a href="<?php the_field('button_url'); ?>"
                            class="hero__btn btn"><?php the_field('button_text'); ?></a>
                    </div>
                </div>
                <div class="hero__title">
                    <h2><?php the_field('section_title'); ?></h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/yellow_dot.svg" class="hero__dot"
                        alt="">
                </div>
            </div>
        </header>
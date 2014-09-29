<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package super simple news page
 */
?>
<!DOCTYPE html>
<!--
Giannis Halvatzakis
-->
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width" />
        <title><?php bloginfo('title');?> - <?php the_title()?></title>

        <?php wp_head(); ?>


    </head>
    <body>

        <div class="container">
            <div class="left-container">
                <div id="logo">Da NEWS</div>
                <?php
                       $args = array(
                          'menu' => 'primary',
                          'echo' => false
                        );
                    echo strip_tags(wp_nav_menu( $args ),'<a>'); 
                ?>
               

            </div>
            <div class="right-container">
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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php wp_head(); ?>


    </head>
    <body>
        <div class="container">
            <div class="left-container">
                <div id="logo">Da NEWS</div>

                <a href="#" class="category selected">Κυριότερες ειδήσεις</a>
                <a href="#" class="category">Κόσμος</a>
                <a href="#" class="category">Ελλάδα</a>
                <a href="#" class="category">Πολιτική</a>
            </div>
            <div class="right-container">
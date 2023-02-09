<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 *
 * @package WordPress
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('single'); ?>>
    <?php get_template_part( 'navbar' ) ?>
    
    
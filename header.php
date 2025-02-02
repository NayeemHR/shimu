<?php
    /**
     * Header template
     *
     * @package Shimu
     */

?>

<!DOCTYPE html>
 <html lang="<?php language_attributes(); ?>">
 <head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
 </head>
 <body              <?php body_class('hello-class'); ?> >
<?php wp_body_open(); ?>

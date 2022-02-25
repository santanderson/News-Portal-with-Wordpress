<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header>

        <span><?php the_custom_logo(); ?></span>

        <nav>
            <?php
            wp_nav_menu(array(
                'menu' => 'Main Menu',
                'menu-id' => 'main-menu'
            ));
            ?>
        </nav>

    </header>

    <main>
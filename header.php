<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
    <?php wp_nav_menu(array("theme_location" => "main-menu")) ?>

    <ul>
        <li>
            <a href="<?php echo get_permalink(get_page_by_path("frontpage")) ?>">Frontpage</a>
        </li>
        <li>
            <a href="<?php echo get_permalink(get_page_by_path("events")) ?>">Events</a>
        </li>
        <li>
            <a href="<?php echo get_permalink(get_page_by_path("rooms")) ?>">Rooms</a>
        </li>

    </ul> 

    <?php get_search_form() ?>
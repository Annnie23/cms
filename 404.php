<?php get_header() ?>
    <h1>404 - Page not found</h1>
    <p>Sorry, the page you are looking for does not exist</p>
    <a href="<?php echo get_permalink(get_page_by_path("frontpage"))?>">Go back to the frontpage</a>
<?php get_footer() ?>
<?php
/*
Template Name: Events Page
*/

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 text-center">
                    All the events take place in the lobby and our visitors have access free of charge.
                </div>
                <div class="col-12 pt-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Date and time</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           
                            $events_query = new WP_Query(array(
                                'post_type' => 'events', 
                                'posts_per_page' => -1, 
                            ));

                            if ($events_query->have_posts()) :
                                while ($events_query->have_posts()) : $events_query->the_post();
                            ?>
                                    <tr>
                                        <td><?php echo get_field('date_and_time'); ?></td>
                                        <td><?php the_title(); ?></td>
                                    </tr>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                            ?>
                                <tr>
                                    <td colspan="2"><?php esc_html_e('No events found.', 'text-domain'); ?></td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>

<?php
get_footer();

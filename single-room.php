<?php get_header(); ?>
<?php if(have_posts()): ?>

<?php
$title = get_the_title();
$link = get_permalink();
?>
<li><a href="<?php echo $link ?>"><?php echo $title ?></a></li>

    <?php while(have_posts()): the_post(); ?>
        <?php
        
        
        $description = get_field("description");
        $price_per_night = get_field("price_per_night");
        $number_of_beds = get_field("number_of_beds");
        $size = get_field("size");
        $primary_picture = get_field("primary_picture");
        $secondary_picture = get_field("secondary_picture");
        ?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                </div>
                <div class="col-9">
                    <div class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php if($primary_picture): ?>
                                <div class="carousel-item active" data-bs-interval="5000">
                                    <img src="<?php echo esc_url($primary_picture['url']); ?>" class="d-block w-100" alt="<?php echo esc_attr($primary_picture['alt']); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if($secondary_picture): ?>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="<?php echo esc_url($secondary_picture['url']); ?>" class="d-block w-100" alt="<?php echo esc_attr($secondary_picture['alt']); ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-info mb-3">
                        <div class="card-header"><?php echo esc_html($description); ?></div>
                        <div class="card-body">
                            <dl class="row m-0 p-0">
                                <dt class="col-12">Price per night</dt>
                                <dd class="col-12"><?php echo esc_html($price_per_night); ?></dd>

                                <dt class="col-12">Number of beds</dt>
                                <dd class="col-12"><?php echo esc_html($number_of_beds); ?></dd>

                                <dt class="col-12">Size</dt>
                                <dd class="col-12"><?php echo esc_html($size); ?></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>

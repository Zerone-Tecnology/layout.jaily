<?php
$args = array('posts_per_page' => 5, 'category' => 2);
$myposts = get_posts($args);
foreach ($myposts as $post) : setup_postdata($post); ?>
    <div class="review-carousel owl-carousel owl-theme">
        <?php $gallery = get_post_gallery_images($post);
        // Loop through each image in each gallery
        foreach ($gallery as $image_url) {
            echo '<div class="item">
													<div class="review_card">
													<div class="user">
								<div class="user_img">
									<img src="' . $image_url . '" alt="">
								</div>';
        } ?>
        <div class="user_name">
            <h6><?php the_title(); ?></h6>
            <p>Жилой дом мкр-н "Юбилейный"</p>
        </div>
    </div>
    <div class="review">
        <p><?php get_the_content(); ?></p>
    </div>
<?php endforeach;
wp_reset_postdata(); ?>
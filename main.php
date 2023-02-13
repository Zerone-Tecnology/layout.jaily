<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jailydesign
 */

get_header();
?>
<div class="wrapper">
    <section class="section_1">
        <div class="container">
            <div class="articles">
                <?php
                $args = array('posts_per_page' => 5, 'category' => 4);
                $myposts = get_posts($args);
                foreach ($myposts as $post) : setup_postdata($post); ?>
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_excerpt(); ?></p>
                <?php endforeach;
                wp_reset_postdata(); ?>
                <button class="default_btn" id="open_modal_btn">Заказать обратный
                    звонок</button>
                <div class="video_play_btn">
                    <div class="circle">
                        <a href="<?= get_field("youtube_banner_link") ?>" target="_blank"><img loading="lazy" src="/wp-content/themes/jailydesign/img/play.png" alt=""></a>
                        <div class="circle_text">
                            <p class="circle_p"> видео посмотреть видео посмотреть</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $args = array('posts_per_page' => 5, 'category' => 4);
        $myposts = get_posts($args);
        foreach ($myposts as $post) : setup_postdata($post); ?>
            <div class="owl-carousel owl-theme">
                <?php $gallery = get_post_gallery_images($post);
                // Loop through each image in each gallery
                foreach ($gallery as $image_url) {
                    echo '<div class="item"><img loading="lazy" loading="lazy" src="' . $image_url . '" alt=""></div>';
                } ?>
            </div>
        <?php endforeach;
        wp_reset_postdata(); ?>
    </section>
    <section class="section_2" id="lazyload_for_div">
        <div class="container">
            <h2>Наши преимущества</h2>
            <div class="advantages">
                <div class="advantages_card">
                    <div class="advantages_img">
                        <img loading="lazy" src="/wp-content/themes/jailydesign/img/advantages_1.png" alt="">
                    </div>
                    <h3><?= get_field('title_preimushestva_1'); ?></h3>
                    <p><?= get_field('description_preimushestva_1'); ?></p>
                </div>
                <div class="advantages_card">
                    <div class="advantages_img">
                        <img loading="lazy" src="/wp-content/themes/jailydesign/img/advantages_2.png" alt="">
                    </div>
                    <h3><?= get_field('title_preimushestva_2'); ?></h3>
                    <p><?= get_field('description_preimushestva_2'); ?></p>
                </div>
                <div class="advantages_card">
                    <div class="advantages_img">
                        <img loading="lazy" src="/wp-content/themes/jailydesign/img/advantages_3.png" alt="">
                    </div>
                    <h3><?= get_field('title_preimushestva_3'); ?></h3>
                    <p><?= get_field('description_preimushestva_3'); ?></p>
                </div>
                <div class="advantages_card">
                    <div class="advantages_img">
                        <img loading="lazy" src="/wp-content/themes/jailydesign/img/advantages_4.png" alt="">
                    </div>
                    <h3><?= get_field('title_preimushestva_4'); ?></h3>
                    <p><?= get_field('description_preimushestva_4'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="section_3 lazyload_for_div" id="s3">
        <div class="container">
            <nav class="portfolio_nav">
                <h2>Портфолио</h2>
                <ul>
                    <li class="active"><a data-filter="all">Все работы</a></li>
                    <li><a data-filter=".categoriya_a">Жилищные помещения</a></li>
                    <li><a data-filter=".categoriya_b">Коммерческие помещения</a></li>
                </ul>
            </nav>
        </div>
        <div class="portfolio">
            <div class="portfolio_img" id="image-gallery">
                <?php
                $args = array('posts_per_page' => 5, 'category' => 3);

                $myposts = get_posts($args);
                foreach ($myposts as $post) : setup_postdata($post); ?>
                    <div class="mix <?= get_field("filter") ?> portfolio_carousel">
                        <div class="owl-carousel owl-theme">
                            <?php $gallery = get_post_gallery_images($post);
                            // Loop through each image in each gallery
                            foreach ($gallery as $image_url) {
                                echo '<div class="item"><img loading="lazy" src="' . $image_url . '" alt=""></div>';
                            } ?>
                        </div>
                        <div class="portfolio_carousel_articles">
                            <h5><?php the_title(); ?></h5>
                        </div>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
                <button type="button" class="default_btn grey" id="gallery-btn">Загрузить еще</button>
            </div><!-- End row --><!-- End image gallery -->
        </div><!-- End container -->
        <!-- <div class="portfolio">
            <div class="portfolio_img">
                
            </div>
            <div class="portfolio_img show_more" id="show_more">
            </div>
        </div>
        <div class="container">
            <button class="default_btn grey" id="show_more_btn">Загрузить еще</button>
        </div> -->
    </section>
    <section class="section_4 lazyload_for_div" id="s4">
        <div class="container">
            <h2>Услуги и цены</h2>
            <div class="order_card_wrapper">
                <div class="order_card">
                    <h5>Пакет<br><?= get_field('price_box_title_1'); ?></h5>
                    <p class="price_articles"><?= get_field('price_box_description_1'); ?></p>
                    <ul class="order_card_list">
                        <?= get_field('price_box_list_1'); ?>
                    </ul>
                    <h6 class="price"><?= get_field('price_box_price_1'); ?></h6>
                    <p class="description"><?= get_field('offer_1'); ?></p>
                    <button class="default_btn red" id="open_modal_btn">Заказать дизайн</button>
                </div>
                <div class="order_card">
                    <h5>Пакет <br><?= get_field('price_box_title_2'); ?> </h5>
                    <p class="price_articles"><?= get_field('price_box_desctiption_2'); ?></p>
                    <ul class="order_card_list">
                        <?= get_field('price_box_list_2'); ?>
                    </ul>
                    <h6 class="price"><?= get_field('price_box_price_2'); ?></h6>
                    <p class="description"><?= get_field('offer_2'); ?></p>
                    <button class="default_btn red" id="open_modal_btn">Заказать дизайн</button>
                </div>
                <div class="order_card">
                    <h5>Пакет <br><?= get_field('price_box_title_3'); ?> </h5>
                    <p class="price_articles"><?= get_field('price_box_description_3'); ?></p>
                    <ul class="order_card_list">
                        <?= get_field('price_box_list_3'); ?>
                    </ul>
                    <h6 class="price"><?= get_field('price_box_price_3'); ?></h6>
                    <p class="description"><?= get_field('offer_3'); ?></p>
                    <button class="default_btn red" id="open_modal_btn">Заказать дизайн</button>
                </div>
            </div>
        </div>
    </section>
    <section class="section_5">
        <div class="container">
            <h2>Этапы работы с клиентами</h2>
            <div class="stages_of_work">
                <div class="stages">
                    <div class="stages_left">
                        <h4>01</h4>
                        <h5><?= get_field('stages_work_title_1'); ?></h5>
                    </div>
                    <div class="stages_right">
                        <p><?= get_field('stages_work_description_1'); ?></p>
                    </div>
                </div>
                <div class="stages">
                    <div class="stages_left">
                        <h4>02</h4>
                        <h5><?= get_field('stages_work_title_2'); ?></h5>
                    </div>
                    <div class="stages_right">
                        <p><?= get_field('stages_work_description_2'); ?></p>
                    </div>
                </div>
                <div class="stages">
                    <div class="stages_left">
                        <h4>03</h4>
                        <h5><?= get_field('stages_work_title_3'); ?></h5>
                    </div>
                    <div class="stages_right">
                        <p><?= get_field('stages_work_description_3'); ?></p>
                    </div>
                </div>
                <div class="stages">
                    <div class="stages_left">
                        <h4>04</h4>
                        <h5><?= get_field('stages_work_title_4'); ?></h5>
                    </div>
                    <div class="stages_right">
                        <p><?= get_field('stages_work_description_4'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mailing" id="s5">
        <div class="container">
            <div class="mailing_content">
                <h5><?= get_field("call_back_title") ?></h5>
                <p>Наш оператор свяжется с вами для расчета стоимости</p>
                <form class="mailing_form">
                    <div class="form_inputs">
                        <input type="text" required placeholder="Имя">
                        <input type="tel" id="imask_phone" required placeholder="Номер телефона">
                    </div>
                    <button class="default_btn red" type="submit">Отправить</button>
                    <input type="hidden" name="project_name" value="Jaily">
                    <input type="hidden" name="admin_email" value="jailyinteriors@gmail.com">
                    <input type="hidden" name="form_subject" value="Новая заявка с сайта">
                </form>
            </div>
        </div>
    </section>
    <section class="team_section" id="s6">
        <div class="container">
            <h2>Наша команда</h2>
        </div>
        <?php
        $image = get_field('team_block_img');
        if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" loading="lazy" class="team_img" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="container">
            <p><?= get_field("team_block_description") ?></p>
        </div>
    </section>
    <section class="review_section" id="s7">
        <div class="container">
            <h2>Отзывы наших клиентов</h2>
            <div class="review-carousel owl-carousel owl-theme">
                <?php
                $args = array('posts_per_page' => 5, 'category' => 2);
                $myposts = get_posts($args);
                foreach ($myposts as $post) : setup_postdata($post); ?>
                    <?php $gallery = get_post_gallery_images($post); ?>
                    <div class="item">
                        <div class="review_card">
                            <div class="user">
                                <div class="user_img">
                                    <?php the_post_thumbnail() ?>
                                </div>
                                <div class="user_name">
                                    <h6><?php the_title(); ?></h6>
                                    <!-- <p>Жилой дом мкр-н "Юбилейный"</p> -->
                                </div>
                            </div>
                            <div class="review">
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();

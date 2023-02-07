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
                <h1>
                    Авторский дизайн <br>
                    интерьера под ключ<br>
                    за 2 недели
                </h1>
                <p>
                    Закажите обратный звонок и получите<br>
                    -10% скидки на планировку
                </p>
                <button class="default_btn" id="open_modal_btn">Заказать обратный
                    звонок</button>
                <div class="video_play_btn">
                    <div class="circle">
                        <a href="https://www.youtube.com/channel/UCqv-coahV12UMJiFX7g1mzg" target="_blank"><img src="/wp-content/themes/jailydesign/img/play.png" alt=""></a>
                        <div class="circle_text">
                            <p class="circle_p"> видео посмотреть видео посмотреть</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="/wp-content/themes/jailydesign/img/design_photo.png" alt="">
            </div>
            <div class="item">
                <img src="/wp-content/themes/jailydesign/img/design_photo.png" alt="">
                <div class="video_play_btn">
                </div>
            </div>
            <div class="item">
                <img src="/wp-content/themes/jailydesign/img/design_photo.png" alt="">
            </div>
            <div class="item">
                <img src="/wp-content/themes/jailydesign/img/design_photo.png" alt="">
            </div>
        </div>
    </section>
    <section class="section_2">
        <div class="container">
            <h2>Наши преимущества</h2>
            <div class="advantages">
                <div class="advantages_card">
                    <div class="advantages_img">
                        <img src="/wp-content/themes/jailydesign/img/advantages_1.png" alt="">
                    </div>
                    <h3>Сильная команда</h3>
                    <p>У нас сильная команда опытных профессоналов </p>
                </div>
                <div class="advantages_card">
                    <div class="advantages_img">
                        <img src="/wp-content/themes/jailydesign/img/advantages_2.png" alt="">
                    </div>
                    <h3>Пунктуальность</h3>
                    <p>Делаем вовремя, а при небольшой задержке снижаем цены за дизайн-проект</p>
                </div>
                <div class="advantages_card">
                    <div class="advantages_img">
                        <img src="/wp-content/themes/jailydesign/img/advantages_3.png" alt="">
                    </div>
                    <h3>Более 300</h3>
                    <p>Столько заказов по дизайну мы выполнили </p>
                </div>
                <div class="advantages_card">
                    <div class="advantages_img">
                        <img src="/wp-content/themes/jailydesign/img/advantages_4.png" alt="">
                    </div>
                    <h3>Ценим время</h3>
                    <p>Большой выбор магазинов-партнеров по отделочным материалам, с выгодной ценой и
                        наработанными скидками</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section_3" id="s3">
        <div class="container">
            <nav class="portfolio_nav">
                <h2>Портфолио</h2>
                <ul>
                    <li class="active"><a data-filter="all">Все работы</a></li>
                    <li><a data-filter=".category_a">Жилищные помещения</a></li>
                    <li><a data-filter=".category_b">Коммерческие помещения</a></li>
                </ul>
            </nav>
        </div>
        <div class="portfolio">
            <div class="portfolio_img">

                <?php
                $args = array('posts_per_page' => 5, 'category' => 3);

                $myposts = get_posts($args);
                foreach ($myposts as $post) : setup_postdata($post); ?>
                    <div class="mix category_a portfolio_carousel">
                        <div class="owl-carousel owl-theme">
                            <?php $gallery = get_post_gallery_images($post);
                            // Loop through each image in each gallery
                            foreach ($gallery as $image_url) {
                                echo '<div class="item"><img src="' . $image_url . '" alt=""></div>';
                            } ?>
                        </div>
                        <div class="portfolio_carousel_articles">
                            <h5><?php the_title(); ?></h5>
                        </div>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>

                <!-- <div class="mix category_a portfolio_carousel">
						<div class="owl-carousel owl-theme">
							<div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
							<div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
							<div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
						</div>
						<div class="portfolio_carousel_articles">
							<h5>ЖК. "Alatau Hills", квартира - 100 кв.м </h5>
						</div>
					</div>
					<div class="mix category_a portfolio_carousel">
						<div class="owl-carousel owl-theme">
							<div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_2.png" alt=""></div>
							<div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_2.png" alt=""></div>
							<div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_2.png" alt=""></div>
						</div>
						<div class="portfolio_carousel_articles">
							<h5>ЖК. "Alatau Hills", квартира - 100 кв.м </h5>
						</div>
					</div>
					<div class="mix category_a portfolio_carousel">
						<div class="owl-carousel owl-theme">
							<div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_3.png" alt=""></div>
							<div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_3.png" alt=""></div>
							<div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_3.png" alt=""></div>
						</div>
						<div class="portfolio_carousel_articles">
							<h5>ЖК. "Alatau Hills", квартира - 100 кв.м </h5>
						</div>
					</div>
					<div class="mix category_a portfolio_carousel">
						<div class="owl-carousel owl-theme">
							<div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
							<div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
							<div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
						</div>
						<div class="portfolio_carousel_articles">
							<h5>ЖК. "Alatau Hills", квартира - 100 кв.м </h5>
						</div>
					</div>
					<div class="mix category_b portfolio_carousel">
						<div class="owl-carousel owl-theme">
							<div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
							<div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
							<div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
						</div>
						<div class="portfolio_carousel_articles">
							<h5>ЖК. "Alatau Hills", квартира - 100 кв.м </h5>
						</div>
					</div>
					<div class="mix category_b portfolio_carousel">
						<div class="owl-carousel owl-theme">
							<div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
							<div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
							<div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
						</div>
						<div class="portfolio_carousel_articles">
							<h5>ЖК. "Alatau Hills", квартира - 100 кв.м </h5>
						</div>
					</div> -->
            </div>
            <div class="portfolio_img show_more" id="show_more">
                <div class="mix category_b portfolio_carousel">
                    <div class="owl-carousel owl-theme">
                        <div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
                        <div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
                        <div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
                    </div>
                    <div class="portfolio_carousel_articles">
                        <h5>ЖК. "Alatau Hills", квартира - 100 кв.м </h5>
                    </div>
                </div>
                <div class="mix category_b portfolio_carousel">
                    <div class="owl-carousel owl-theme">
                        <div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
                        <div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
                        <div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
                    </div>
                    <div class="portfolio_carousel_articles">
                        <h5>ЖК. "Alatau Hills", квартира - 100 кв.м </h5>
                    </div>
                </div>
                <div class="mix category_a portfolio_carousel">
                    <div class="owl-carousel owl-theme">
                        <div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
                        <div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
                        <div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
                    </div>
                    <div class="portfolio_carousel_articles">
                        <h5>ЖК. "Alatau Hills", квартира - 100 кв.м </h5>
                    </div>
                </div>
                <div class="mix category_a portfolio_carousel">
                    <div class="owl-carousel owl-theme">
                        <div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
                        <div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
                        <div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
                    </div>
                    <div class="portfolio_carousel_articles">
                        <h5>ЖК. "Alatau Hills", квартира - 100 кв.м </h5>
                    </div>
                </div>
                <div class="mix categoty_b portfolio_carousel">
                    <div class="owl-carousel owl-theme">
                        <div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
                        <div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
                        <div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
                    </div>
                    <div class="portfolio_carousel_articles">
                        <h5>ЖК. "Alatau Hills", квартира - 100 кв.м </h5>
                    </div>
                </div>
                <div class="mix categoty_b portfolio_carousel">
                    <div class="owl-carousel owl-theme">
                        <div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
                        <div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
                        <div class="item"><img src="/wp-content/themes/jailydesign/img/portfolio/portfolio_1.png" alt=""></div>
                    </div>
                    <div class="portfolio_carousel_articles">
                        <h5>ЖК. "Alatau Hills", квартира - 100 кв.м </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <button class="default_btn grey" id="show_more_btn">Загрузить еще</button>
        </div>
    </section>
    <section class="section_4" id="s4">
        <div class="container">
            <h2>Услуги и цены</h2>
            <div class="order_card_wrapper">
                <div class="order_card">
                    <h5>Пакет <br>“Дизайн проект” </h5>
                    <p>Создадим дизайн проект, по которому будут выполняться все ремонтно-отделочные работы.</p>
                    <ul class="order_card_list">
                        <li>Планировочное решение</li>
                        <li>Дизайн-концепция</li>
                        <li>3D визуализация</li>
                        <li>Подбор материалов</li>
                        <li>Строительные чертежи</li>
                    </ul>
                    <h6 class="price">От <span>8 500 ₸</span> за м²</h6>
                    <p class="description">*Постоянным клиентам - скидка 10%</p>
                    <button class="default_btn red">Заказать дизайн</button>
                </div>
                <div class="order_card">
                    <h5>Пакет <br>“Дизайн проект” </h5>
                    <p>Создадим дизайн проект, по которому будут выполняться все ремонтно-отделочные работы.</p>
                    <ul class="order_card_list">
                        <li>Планировочное решение</li>
                        <li>Дизайн-концепция</li>
                        <li>3D визуализация</li>
                        <li>Подбор материалов</li>
                        <li>Строительные чертежи</li>
                    </ul>
                    <h6 class="price">От <span>8 500 ₸</span> за м²</h6>
                    <p class="description">*Постоянным клиентам - скидка 10%</p>
                    <button class="default_btn red">Заказать дизайн</button>
                </div>
                <div class="order_card">
                    <h5>Пакет <br>“Дизайн проект” </h5>
                    <p>Создадим дизайн проект, по которому будут выполняться все ремонтно-отделочные работы.</p>
                    <ul class="order_card_list">
                        <li>Планировочное решение</li>
                        <li>Дизайн-концепция</li>
                        <li>3D визуализация</li>
                        <li>Подбор материалов</li>
                        <li>Строительные чертежи</li>
                    </ul>
                    <h6 class="price">От <span>8 500 ₸</span> за м²</h6>
                    <p class="description">*Постоянным клиентам - скидка 10%</p>
                    <button class="default_btn red">Заказать дизайн</button>
                </div>
            </div>
        </div>
    </section>
    <section class="section_5">
        <div class="container">
            <h2>Этапы работы с клиентами</h2>
            <div class="stages_of_work">
                <div class="stages">
                    <h4>01</h4>
                    <h5>Знакомство</h5>
                    <p>На данном этапе мы заполняем - бриф, получаем от вас техническое задание и приступаем к
                        реализации планировочного решения</p>
                </div>
                <div class="stages">
                    <h4>02</h4>
                    <h5>Разработка дизайн-проекта</h5>
                    <p>Самая творческая часть работы, ведь сюда входит составление мудбордов, 3D визуализация и
                        создание чертежей</p>
                </div>
                <div class="stages">
                    <h4>03</h4>
                    <h5>Реализация</h5>
                    <p>Мы берем на себя подбор необходимых - материалов, контроль процесса строительства,
                        консультацию подрядчиков</p>
                </div>
                <div class="stages">
                    <h4>04</h4>
                    <h5>Сдача объекта</h5>
                    <p>Обсуждаем все оставшиеся вопросы, вносим необходимые корректировки и согласовываем результат
                        работы</p>
                </div>
            </div>
        </div>
    </section>
    <section class="mailing" id="s5">
        <div class="container">
            <div class="mailing_content">
                <h5>Закажите обратный звонок и получите скидку -10% на планировку</h5>
                <p>Наш оператор свяжется с вами для расчета стоимости</p>
                <form class="mailing_form">
                    <div class="form_inputs">
                        <input type="text" required placeholder="Имя">
                        <input type="tel" required placeholder="Номер телефона">
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
        <img src="/wp-content/themes/jailydesign/img/team_img.png" class="team_img" alt="">
        <div class="container">
            <p>Мы — команда творческих профессионалов<br>
                Наша миссия состоит в том, чтобы спроектировать и разработать лучший интерьер для Вас</p>
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
                    <?php $gallery = get_post_gallery_images($post);
                    // foreach ($gallery as $image_url) {
                    //     echo '
                    //             <div class="item">
                    // 			    <div class="review_card">
                    // 					<div class="user">
                    // 			            <div class="user_img">
                    // 			            	<img src="' . $image_url . '" alt="">
                    // 			            </div>';
                    // } 
                    ?>
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
                <!-- 					
                
                    <div class="item">
						<div class="review_card">
							<div class="user">
								<div class="user_img">
									<img src="/wp-content/themes/jailydesign/img/user_1.png" alt="">
								</div>
								<div class="user_name">
									<h6>Гульшара</h6>
									<p>Жилой дом мкр-н "Юбилейный"</p>
								</div>
							</div>
							<div class="review">
								<p>Заказали дизайн проект с авторским надзором. Все очень красиво и удобно спланировали,
									дизайнеры очень внимательные к деталям. До конца стройки вели авторский надзор, даже
									помогли с подбором декора и картин на стены.</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="review_card">
							<div class="user">

								<div class="user_img">
									<img src="/wp-content/themes/jailydesign/img/user_2.png" alt="">
								</div>
								<div class="user_name">
									<h6>Жанар</h6>
									<p>Жилой дом по ул. Хан-Тенгри</p>
								</div>
							</div>
							<div class="review">
								<p>Благодарю за дизайн-проект под руководством Айдына! Быстро, профессионально,
									уважительно к клиенту работает вся команда. Позитивный настрой - вот что можно
									сказать о работе этих ребят.</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="review_card">
							<div class="user">
								<div class="user_img">
									<img src="/wp-content/themes/jailydesign/img/user_1.png" alt="">
								</div>
								<div class="user_name">
									<h6>Гульшара</h6>
									<p>Жилой дом мкр-н "Юбилейный"</p>
								</div>
							</div>
							<div class="review">
								<p>Заказали дизайн проект с авторским надзором. Все очень красиво и удобно спланировали,
									дизайнеры очень внимательные к деталям. До конца стройки вели авторский надзор, даже
									помогли с подбором декора и картин на стены.</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="review_card">
							<div class="user">
								<div class="user_img">
									<img src="/wp-content/themes/jailydesign/img/user_2.png" alt="">
								</div>
								<div class="user_name">
									<h6>Жанар</h6>
									<p>Жилой дом по ул. Хан-Тенгри</p>
								</div>
							</div>
							<div class="review">
								<p>Благодарю за дизайн-проект под руководством Айдына! Быстро, профессионально,
									уважительно к клиенту работает вся команда. Позитивный настрой - вот что можно
									сказать о работе этих ребят.</p>
							</div>
						</div>
					</div> -->

            </div>
        </div>
    </section>
</div>

<?php
get_footer();

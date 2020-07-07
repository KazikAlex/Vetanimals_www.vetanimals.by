<?php
/*
 * Template Name: Главная
*/

?>



<?php get_header(); ?>

    <section class="main" id="main-sub">
        <div class="container">
            <div class="main_title"><h1><span>Лечим</span> собак, кошек, птиц, грызунов</h1></div>
            <button class="main_btn" id="main-btn">Записаться на прием</button>

            <!-- <section class="registration" id="hiddden_form">
                <div class="container"> -->
                    <form class="form" id="hiddden_form">
                        <div class="form_reg">
                            <div class="form_title">Запись на прием</div>
                            <label for="name">Имя*</label>
                            <input id="name" type="text">
                            <label for="tel">Телефон*</label>
                            <input id="tel" type="tel">
                            <label for="mail">E-mail*</label>
                            <input id="mail" type="email">
                            <div id="subm">Записаться</div>
                        </div>
                        <div class="form_message">
                            <div class="form_message_wrapper">
                                <div class="form_close" id="form-close">Закрыть</div>
                                <label for="mess">Сообщение</label>
                                <textarea id="mess"></textarea>
                            </div>
                        </div>
                    </form>
                <!-- </div>
            </section> -->

                    <div class="thanks" id="thanks"> 
                        <div class="thanks_close" id="thanks-close">Закрыть</div>
                        <div class="thanks_title">Спасибо!</div>
                        <div class="thanks_subtitle">Мы свяжемся с Вами для уточнения деталей записи</div>
                    </div>

        </div>

    </section>
        
    <section class="presentation">
        <div><img src="<?php bloginfo('template_url')?>/img/presentation.jpg" alt="doctor" class="presentation_img"></div>
        <div class="presentation_descr">
            <div class="presetation_descr_title">Ветеринарная клиника в Бобруйске</div>
            <div class="presetation_descr_subtitle">
                Мы рады приветствовать Вас на сайте нашей клинике!<br>
                <br>
                Здесь Вы найдете всю интересующую информацию об услугах нашей клиники.<br>
                <br>
                Мы занимаемся лечением всех видов мелких домашних животных; собак, кошек, птиц, грызунов
                и рептилий.<br>
                <br>
                У нас работают высококвалифицированные врачи с большим опытом работы, которые
                постоянно совершенствуют свои профессиональные навыки, посещая симпозиумы, конференции,
                конгрессы и мастер классы.<br>
                <br>
                Наше современное оборудование позволяет оказывать ветеринарные услуги, на всех этапах лечебного процесса, начиная с диагностики и заканчивая сложными хирургическими операциями. <br>
                <br>
                В ветеринарной аптеке Вы можете приобрести все необходимые препараты, лечебные корма и
                товары для ухода за вашими питомцами.
                <br>
                Надеемся ,что посещение нашей клиники будет комфортно для Вас и ваших любимцев.
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">

            <div class="block_header">
                <div class="block_header_title">Наши услуги</div>
                <div class="block_header_menu"><a href="#">Посмотреть все услуги</a></div>
            </div>
            <div class="block_subheader">
                <div class="block_subheader_arrows">
                    <img class="prev-servises" alt="prev" src="<?php bloginfo('template_url')?>/icons/prev_arrow.png">
                    <img class="next-services" alt="next" src="<?php bloginfo('template_url')?>/icons/next_arrow.png">
                </div>
                <div class="block_subheader_line"></div>
            </div>

            <div class="block_carousel block_carousel_services">

            <?php $slider = new WP_Query(array('post_type' => 'slider'));?>
                    
                <?php if( $slider->have_posts() ) : ?> 
                    <div class="container">
                        <div class="services-wrapper rss">
                            <?php while ( $slider->have_posts() ) : $slider->the_post(); ?>       
                                <div class="block_carousel_item">
                                    <div><img class="block_carousel_item_img"  alt="services" src=<?php the_post_thumbnail('full') ?></div>
                                    <div class="block_carousel_item_title"><?php the_title() ?></div>
                                    <div class="block_carousel_item_descr"><?php the_content()?></div>
                                    <button class="block_carousel_item_btn"><a href="#">Узнать больше</a></button>
                                </div>  
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php else: ?>
                <p>Место под слайдер</p>
                <?php endif; ?>



            </div>


        </div>
    </section>

    <section class="patient">
        <div class="container">
            <div class="block_header">
                <div class="block_header_title">Кого мы лечим</div>
                <div class="block_header_menu"><a href="#">Посмотреть всех пациентов</a></div>
            </div>
            <div class="block_subheader">
                <div class="block_subheader_arrows">
                    <img src="<?php bloginfo('template_url')?>/icons/prev_arrow.png" alt="prev" class="prev-patient"><a href="#"></a>
                    <img src="<?php bloginfo('template_url')?>/icons/next_arrow.png" alt="next" class="next-patient"><a href="#"></a>
                </div>
                <div class="block_subheader_line"></div>
            </div>

            <div class="block_carousel block_carousel_patient">

                <div class='container'>

                     <div class="patient-wrapper rss">

                        <div class="block_carousel_item block_carousel_item_patients">
                            <div class="block_carousel_item_img block_carousel_item_patient_img"><img src="<?php bloginfo('template_url')?>/icons/dog.png" alt="dog"></div>
                            <div class="block_carousel_item_title">Собаки</div>
                            <div class="block_carousel_item_descr block_carousel_item_descr_patient">Диагностика и лечение заболеваний у собак: вакцинация, чипирование, 
                                лечение вирусных и инфекционных заболеваний у собак. Самые распространенные заболевания у собак.</div>
                            <button class="block_carousel_item_btn block_carousel_item_btn_patient"><a href="<?php the_permalink(); ?>/patient-dog/">Подробнее о лечении собак</a></button>
                        </div>

                        <div class="block_carousel_item block_carousel_item_patients">
                            <div class="block_carousel_item_img block_carousel_item_patient_img"><img src="<?php bloginfo('template_url')?>/icons/cat.png" alt="cat"></div>
                            <div class="block_carousel_item_title">Кошки</div>
                            <div class="block_carousel_item_descr block_carousel_item_descr_patient">Диагностика и лечение заболеваний у кошек: вакцинация, чипирование, лечение 
                                вирусных и инфекционных заболеваний. Самые распространенные заболевания у кошек.</div>
                            <button class="block_carousel_item_btn block_carousel_item_btn_patient"><a href="<?php the_permalink(); ?>/patient-cats/">Подробнее о лечении кошек</a></button>
                        </div>

                        <div class="block_carousel_item block_carousel_item_patients">
                            <div class="block_carousel_item_img block_carousel_item_patient_img"><img src="<?php bloginfo('template_url')?>/icons/reptile.png" alt="reptile"></div>
                            <div class="block_carousel_item_title">Рептилии</div>
                            <div class="block_carousel_item_descr block_carousel_item_descr_patient">Диагностика и лечение заболеваний у рептилий: игуан, хамелеонов, питонов, черепах. 
                                Основные проблемы и заболевания рептилий.</div>
                            <button class="block_carousel_item_btn block_carousel_item_btn_patient"><a href="<?php the_permalink(); ?>/patient-reptiles/">Подробнее о лечении рептилий</a></button>
                        </div>

                        <div class="block_carousel_item block_carousel_item_patients">
                            <div class="block_carousel_item_img block_carousel_item_patient_img"><img src="<?php bloginfo('template_url')?>/icons/bird.png" alt="bird"></div>
                            <div class="block_carousel_item_title">Птицы</div>
                            <div class="block_carousel_item_descr block_carousel_item_descr_patient">Диагностика и лечение болезней декоративных и певчих птиц: попугаев, канареек, 
                                неразлучников и других. Основные заболевания у птиц.</div>
                            <button class="block_carousel_item_btn block_carousel_item_btn_patient"><a href="<?php the_permalink(); ?>/patiet-birds/">Подробнее о лечении птиц</a></button>
                        </div>

                        <div class="block_carousel_item block_carousel_item_patients">
                            <div class="block_carousel_item_img block_carousel_item_patient_img"><img src="<?php bloginfo('template_url')?>/icons/exotic.png" alt="exotic"></div>
                            <div class="block_carousel_item_title">Экзотические млекопитающие</div>
                            <div class="block_carousel_item_descr block_carousel_item_descr_patient">Диагностика и лечение мелких экзотических млекопитающих: хорьков, ежей.</div>
                            <button class="block_carousel_item_btn block_carousel_item_btn_patient"><a href="<?php the_permalink(); ?>/patiet-exotic/">Подробнее о лечении млекопитающих</a></button>
                        </div>

                        <div class="block_carousel_item block_carousel_item_patients">
                            <div class="block_carousel_item_img block_carousel_item_patient_img"><img src="<?php bloginfo('template_url')?>/icons/rodents.png" alt="rodents"></div>
                            <div class="block_carousel_item_title">Грызуны</div>
                            <div class="block_carousel_item_descr block_carousel_item_descr_patient">Диагностика и лечение болезней грызунов: декоративных крыс, шиншилл, морских свинок, 
                                кроликов, хомячков, дегу и других грызунов. Основные заболевания грызунов.</div>
                            <button class="block_carousel_item_btn block_carousel_item_btn_patient"><a href="<?php the_permalink(); ?>/patient-rodents/">Подробнее о лечении грызунов</a></button>
                        </div>

                    </div>

                </div>
            </div>


        </div>
    </section>

    <section class="specialists">
        <div class="container">
            <div class="block_header">
                <div class="block_header_title">Cпециалисты</div>
                <div class="block_header_menu"><a href="#">Посмотреть всех врачей</a></div>
            </div>
            <div class="block_subheader">
                <div class="block_subheader_arrows">
                    <img src="<?php bloginfo('template_url')?>/icons/prev_arrow.png" alt="prev" class="prev-specialist"><a href="#"></a>
                    <img src="<?php bloginfo('template_url')?>/icons/next_arrow.png" alt="next" class="next-specialist"><a href="#"></a>
                </div>
                <div class="block_subheader_line"></div>
            </div>
            <div class="block_carousel block_carousel_specialist">

            <?php $slider3 = new WP_Query(array('post_type' => 'slider3'));?>                
                <?php if( $slider3->have_posts() ) : ?> 
                    <div class="container">
                        <div class="specialists-wrapper rss">
                            <?php while ( $slider3->have_posts() ) : $slider3->the_post(); ?>    
                                <div class="block_carousel_item block_carousel_item_specialist">
                                        <div class="block_carousel_item_img"><?php the_post_thumbnail('full') ?></div>
                                        <div class="block_carousel_item_title"><?php the_title() ?></div>
                                        <div class="block_carousel_item_descr block_carousel_item_descr_specialists"><?php the_content() ?></div>
                                        
                                    </div>
                            <?php endwhile; ?>
                        </div>  
                    </div>     
                                    
            <?php else: ?>
                <p>Место под слайдер</p>
            <?php endif; ?>

            </div>
        </div>
    </section>


    <section class="promo">
        <div class="container">
            <div class="promo_wrapper">

                <div class="promo_item">
                    <div class="promo_img"><img src="<?php bloginfo('template_url')?>/img/patient.jpg" alt="patient"></div>
                    <div class="promo_title">От собаки до хомячка</div>
                    <div class="promo_descr">Мы принимаем любых пациентов, даже самых экзотических</div>
                    <button class="promo_btn"><a href="<?php the_permalink(); ?>/patients/">Пациенты</a></button>
                </div>

                <div class="promo_item">
                    <div class="promo_img"><img src="<?php bloginfo('template_url')?>/img/pharmacy.jpg" alt="pharmacy"></div>
                    <div class="promo_title">Работает ветаптека</div>
                    <div class="promo_descr">Купить назначенные ветеринаром лекарства можно сразу же у нас</div>
                    <button class="promo_btn"><a href="<?php the_permalink(); ?>/pharmacies/">Адреса</a></button>
                </div>

                <div class="promo_item">
                    <div class="promo_img"><img src="<?php bloginfo('template_url')?>/img/equipment.jpg" alt="equipment"></div>
                    <div class="promo_title">Современное оборудование</div>
                    <div class="promo_descr">Наша ветклиника оснащена новым и современным оборудованием</div>
                    <button class="promo_btn"><a href="<?php the_permalink(); ?>/about/">О нас</a></button>
                </div>

                <div class="promo_item">
                    <div class="promo_img"><img src="<?php bloginfo('template_url')?>/img/certificate.jpg" alt="certificate"></div>
                    <div class="promo_title">Квалифицированные врачи</div>
                    <div class="promo_descr">Все ветеринарные врачи в нашей клинике имеют высокую квалификацию</div>
                    <button class="promo_btn"><a href="<?php the_permalink(); ?>/specialists/">Специалисты</a></button>
                </div>

        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="block_header">
                <div class="block_header_title">Новости и акции</div>
                <div class="block_header_menu"><a href="#">Смотреть архив новостей</a></div>
            </div>
            <div class="block_subheader">
                <div class="block_subheader_arrows">
                    <img src="<?php bloginfo('template_url')?>/icons/prev_arrow.png" alt="prev" class="prev-news"><a href="#"></a>
                    <img src="<?php bloginfo('template_url')?>/icons/next_arrow.png" alt="next" class="next-news"><a href="#"></a>
                </div>
                <div class="block_subheader_line"></div>
            </div>
            
            <div class="block_carousel block_carousel_news">

            <?php $slider1 = new WP_Query(array('post_type' => 'slider1'));?>     
                <?php if( $slider1->have_posts() ) : ?> 
                    <div class="container">
                        <div class="news-wrapper rss">
                            <?php while ( $slider1->have_posts() ) : $slider1->the_post(); ?>    
                                <div class="block_carousel_item">
                                    <div class="block_carousel_item_img"><?php the_post_thumbnail('full'); ?></div>
                                    <div class="block_carousel_item_wrapper">
                                        <div class="news_date"><?php the_time('d.m.Y'); ?></div>
                                        <div class="block_carousel_item_title block_carousel_item_title_news"><?php the_title(); ?></div>
                                        <div class="block_carousel_item_descr block_carousel_item_descr_news"><?php the_excerpt(); ?></div>
                                        <a href="<?php the_permalink(); ?>">Читать далее</a>
                                    </div>
                                </div>              
                            <?php endwhile; ?>

                        </div>
                    </div>
                
            <?php else: ?>
                <p>Место под слайдер</p>
            <?php endif; ?>
                
            </div>

            </div>
        </div>
    </section>

    <section class="registration">
        <div class="container">
            <form class="form">
                <div class="form_reg">
                    <div class="form_title">Запись на прием</div>
                    <label for="name">Имя*</label>
                    <input id="name" type="text">
                    <label for="tel">Телефон*</label>
                    <input id="tel" type="tel">
                    <label for="mail">E-mail*</label>
                    <input id="mail" type="email">
                    <div type="submit" id="subm">Записаться</div>
                </div>
                <div class="form_message">
                    <div class="form_message_wrapper">
                        <label for="mess">Сообщение</label>
                        <textarea id="mess"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="location">
        <div class="container">
            <div class="location_map"></div>
            <div class="location_adress">
                <div>
                    <div class="header_logo">
                        <div class="header_logo-name">ЭНИМАЛС</div>
                        <div class="header_logo-subname">Ветеринарная клиника</div>
                    </div>
                    <div class="location_adr">
                        <img src="<?php bloginfo('template_url')?>/icons/adress.png" alt="adress">
                        <div class="location_adr_item">г Бобруйск <br>ул Энгельса д 73</div>
                    </div>
                </div>
                <div>
                    <div class="location_pharmacy_title">Аптеки</div>
                    <div class="location_adr">
                        <img src="<?php bloginfo('template_url')?>/icons/adress.png" alt="adress">
                        <div class="location_adr_item">г Бобруйск <br>ул Социалистическая д 141  </div>
                    </div>
                    <div class="location_adr">
                        <img src="<?php bloginfo('template_url')?>/icons/adress.png" alt="adress">
                        <div class="location_adr_item">г Бобруйск <br>ул 50 лет ВЛКСМ д 6 </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();?>



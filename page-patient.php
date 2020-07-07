<?php 

/*
 * Template Name: Пациенты
*/
?>

<?php get_header(); ?>

<div class="container">
    <div class="presentation-title"><?php the_title() ?></div>
</div>

    <div class="container">
        <div class="patient1-wrapper">

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

<?php get_footer();?>
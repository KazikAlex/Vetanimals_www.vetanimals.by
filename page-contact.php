<?php 

/*
 * Template Name: Контакты
*/

?>

<?php get_header(); ?>

    <div class="container">
        <div class="presentation-title"><?php the_title() ?></div>
    </div>

    <div class="contacts-map"><img src="<?php bloginfo('template_url')?>/img/map contact.jpg" alt="map"></div>
    
    <div class="contacts">    
        <div class="container">
            <div class="contacts-wrapper">
                <!-- <div class="contacts-top"> -->
                    <div class="contacts-top_adress"><div><img src="<?php bloginfo('template_url')?>/icons/adress.png" alt="adress"></div>г. Бобруйск, ул. Энгельса, 73</div>
                    <div class="contacts-top_time"><div><img src="<?php bloginfo('template_url')?>/icons/clock.png" alt="clock"></div>08:00 - 20:00</div>
                <!-- </div> -->

                <!-- <div class="contacts-middle">               -->
                    <div class="contacts-middle_tel">
                        <div><img src="<?php bloginfo('template_url')?>/icons/smartphone.png" alt="smartphone"></div>
                        <div class="contacts-middle_wrap">
                            <div><a href="tel:+375293674790">+37529<b>3674790</b></a></div>
                            <div><a href="tel:+375225721689">+37522<b>5721689</b></a></div>
                            <div><a href="tel:+375225731212">+37522<b>5731212</b></a></div>
                        </div>
                    </div>
                    <div class="contacts-middle_mail"><div><img src="<?php bloginfo('template_url')?>/icons/mail.png" alt="mail"></div>enimals@tut.by</div>
                <!-- </div> -->
            </div>

            <div class="contacts-bottom">
                <div class="contacts-bottom_title">Аптеки</div>
                <div></div>
                <div class="contacts-bottom_adress"><div><img src="<?php bloginfo('template_url')?>/icons/adress.png" alt="adress"></div>г Бобруйск <br>ул Социалистическая д 141  </div>
                <div class="contacts-bottom_adress"><div><img src="<?php bloginfo('template_url')?>/icons/adress.png" alt="adress"></div>г Бобруйск <br>ул 50 лет ВЛКСМ д 6</div>
            </div>

            <div class="contacts-company">
                ЧТСУП Энималс
                юридический и почтовый адрес: 220025,
                г. Бобруйск, ул. Социалистическая, 141
                Свидетельство о государственной регистрации
                от 16 ноября 2018г. УНП 790401254
            </div>

            <div class="contacts-license">
                Лицензия № 45876/3463 выдана 18.02.2019г. <br>
                Министерством сельского хозяйства и продовольствия Республики Беларусь.

            </div>

        </div>
    </div>

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
    <!-- </div> -->





<?php get_footer();?>

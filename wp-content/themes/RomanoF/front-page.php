<?php get_header(); ?>
<section>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</section>
<article class="teaser">
    <div class="heading">
        <h1 style="padding-top: 10px; text-align: center;">ИЩЕТЕ КАЧЕСТВЕННУЮ МЕБЕЛЬ НА ЗАКАЗ?<br>
        ТОГДА ВЫ НА ПРАВИЛЬНОМ ПУТИ!</h1>

        <div id="linkmore">
            <h1>Мебель на заказ</h1>
        </div>
        <p>
            Почему же все-таки мебель лучше делать под заказ?  Чем она выигрывает на фоне серийной, той, которую
            Вы можем купить без ожидания и малейших усилий,  посетив мебельный салон?
        <p>
            Мы подобрали перечень критериев по которым любой современный человек выбирает мебель для создания комфорта и
            уюта в своем помещении, будь это квартира, дом, офис или что-то еще.
        </p>
        <h3>К основным критериям идеальной мебели мы относим:</h3>
        <ul>
            <li>      соотношение цены и качества изделий;</li>
            <li>      безопасность и экологичность материалов;</li>
            <li>      разнообразие выбора цветов, материалов, фурнитуры и т.д.;</li>
            <li>      эксклюзивность каждого изделия;</li>
            <li>      разнообразие форм и сложности изделий;</li>
            <li>      качество сборки;</li>
            <li>      функциональность и эргономичность готовой мебели;</li>
            <li>      внешний вид мебели: эстетичность и органичность ее внешнего вида в любом помещении;</li>
            <li>      дальнейшее обслуживание и гарантия на изделия.</li>
        </ul>
        <p>Что из этого можно отнести к достоинствам серийной мебели? Три, максимум четыре пунтка.  
            <strong>Делая мебель на заказ Вы получаете все и сразу</strong>. Кроме того, в Вашем распоряжении
            будет дизайнер, который после замера подберет материалы, идеальное сочетание цветов и прорисует
            эксклюзивный дизайн проект Вашей мебели. Вызов дизайнера, замер и дизайн проект мы всегда делаем
            для Вас бесплатно.
        </p>
        <p>
            Друзья, в своей работе мы следуем принципу «Относитесь к людям так, как хотите чтобы они относились к Вам». 
            Каждый человек должен с полной отдачей относиться к своей работе и тогда, все вместе, мы сможем поднять
            уровень обслуживания в нашей с Вами стране. Для нас это не просто слова, мы действительно работаем на
            совесть и хотим подарить как можно больше улыбок нашим клиентам. И поэтому с нетерпением ждем Вашего звонка!
        </p>
        <div class="text-more-btn-wrap"><a class="text-more-btn" href="https://kamod.kiev.ua/#">Читать дальше</a></div>
    </div>
    <div class="steps-block">
        <h1>6 ШАГОВ К НОВОЙ МЕБЕЛИ</h1>
        <div class="steps">
            <p class="steps-icons"><img src="http://wordpresstest.dev/wp-content/uploads/2017/03/phone.png" /></p>
            <h2>ЗВОНОК</h2>
            <p>Вы обращаетесь в нашу компанию для консультации с дизайнером или бесплатного просчета Вашего проекта.</p>
        </div>
        <div class="steps">
            <p class="steps-icons"><img src="http://wordpresstest.dev/wp-content/uploads/2017/03/arrows.png" /></p>
            <h2>ЗАМЕР</h2>
            <p>Если у Вас еще нет проекта, в назначенное время наш дизайнер приедет к Вам на объект для замера помещения.</p>
        </div>
        <div class="steps">
            <p class="steps-icons"><img src="http://wordpresstest.dev/wp-content/uploads/2017/03/contract.png" /></p>
            <h2>ПРОЕКТ</h2>
            <p>По результатам замера дизайнер создает 3D проект, учитывая Ваши пожелания и просчитывает стоимость Вашей мебели.</p>
        </div>
        <div class="steps">
            <p class="steps-icons"><img src="http://wordpresstest.dev/wp-content/uploads/2017/03/file.png" /></p>
            <h2>ДОГОВОР</h2>
            <p>На этом этапе мы утверждаем эскизы и сроки изготовления, после чего назначаем дату установки и заключаем договор.</p>
        </div>
        <div class="steps">
            <p class="steps-icons"><img src="http://wordpresstest.dev/wp-content/uploads/2017/03/settings.png" /></p>
            <h2>ИЗГОТОВЛЕНИЕ</h2>
            <p>В течении оговоренного времени команда наших специалистов занимается изготовлением Вашей мебели.</p>
        </div>
        <div class="steps">
            <p class="steps-icons"><img src="http://wordpresstest.dev/wp-content/uploads/2017/03//toolbox.png" /></p>
            <h2>УСТАНОВКА</h2>
            <p>По предварительному звонку, в удобное для Вас время, мы привозим и устанавливаем долгожданную мебель
               и поверьте, Вы точно останетесь довольны!<p>
        </div>
    </div>
    <div class="orderForm">
        <h1>ХОТИТЕ УЗНАТЬ ЦЕНУ ВАШЕЙ МЕБЕЛИ?</h1>
        <form action= "/" method= "POST">
            <p style="margin-bottom: 5px; color: #969696;">Прикрепите дизайн-проект вашей мебели к форме обратной связи и дизайнер свяжется с Вами в ближайшее время.</p>
            <p class="orderPosDisplay"> <input type= "text" placeholder="Ваше имя" name= "name"> </p>
            <p class="orderPosDisplay"> <input type= "text" placeholder="Номер телефона" name= "email"></p>
            <textarea style="border-radius: 10px" placeholder="Коментарий" rows= "10" cols= "100%" name= "message"></textarea></p>
            <input type="hidden" name="MAX_FILE_SIZE" value="30000">
            <div style="border: 1px #c4c4c4 solid;  height: 40px; width: 140px; text-align: center; margin: 1% auto">

                <input name="userfile" type="file"style="font-size: 20px; margin: 5px 0px 0px -40px; padding: 0px;
                    cursor: pointer; opacity: 0; position: absolute ">
                <p style="font-size: 15px; padding-top: 10px;">Обзор файлов</p>
            </div>


            <p><input type= "submit" value= "Узнать цену"></p>
        </form>
    </div>
    <div class="ourProjects">
        <h1>НАШИ ДИЗАЙН ПРОЕКТЫ:</h1>
        <div class="ourProjectsExemple"><a href="/"><img src="http://wordpresstest.dev/wp-content/uploads/2017/03/P1050705s.jpg"></a> </div>
        <div class="ourProjectsExemple"><a href="/"><img src="http://wordpresstest.dev/wp-content/uploads/2017/03/image.jpg"></a> </div>
        <div class="ourProjectsExemple"><a href="/"><img src="http://wordpresstest.dev/wp-content/uploads/2017/03/P1050705-1.jpg"></a> </div>
        <div class="ourProjectsExemple"><a href="/"><img src="http://wordpresstest.dev/wp-content/uploads/2017/03/45FRqAScxQ0.jpg"></a> </div>
        <div class="ourProjectsExemple"><a href="/"><img src="http://wordpresstest.dev/wp-content/uploads/2017/03/image6.jpg"></a> </div>
        <div class="ourProjectsExemple"><a href="/"><img src="http://wordpresstest.dev/wp-content/uploads/2017/03/4-1.jpg"></a> </div>
    </div>

</article>

<?php get_footer(); ?>


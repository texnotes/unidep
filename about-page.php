<?php /*
Template Name: Шаблон сторінки про кафедру
Template Post Type:  page
*/

 get_header() ?>

<div class="grid-container">


<nav aria-label="You are here:" role="navigation">
  <ul class="breadcrumbs">
    <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>">Головна</a></li>
     <li>
      <span class="show-for-sr">Current: </span> <?php the_title(  ); ?>
    </li>
  </ul>
</nav>



			<div class="grid-x grid-padding-x">
				<div class="large-8 medium-8 cell">
					<h2 class="text-center">Про кафедру</h2>
					<!-- Grid Example -->

					<div class="grid-x grid-padding-x">
						<div class="large-6 medium-6 cell">
							<div class=" ">
								<p class="text-center">
								<img style="width: 350px;" src="<?php echo get_template_directory_uri(); ?>/assets/pictures/kafcbit_logo.png">
								</p>
							</div>
						</div>
						<div class="large-6 medium-6 cell">
							<div class="secondary callout ">
								<p>Викладачами кафедри здійснюється підготовка бакалаврів зі спеціальності 125 «Кібербезпека». Фахівці у даній сфері можуть здійснювати професійну діяльність у малому і середньому бізнесі, на підприємствах та установах різних форм власності, виробничої та невиробничої сфери, органах державного і місцевого управління, освітніх та наукових закладах. Цілі навчання бакалаврів – підготовка фахівців, здатних розробляти і використовувати технології інформаційної безпеки.</p>
							</div>
						</div>
					</div>

					<div class="grid-x grid-padding-x">
						<div class="large-12 cell">
							<div class=" ">
								<p>
								Кафедра створена у 2018. На кафедрі кібербезпеки та інформаційних технологій працюють 10 викладачів, з них 3 мають науковий ступінь доктора технічних наук, 5 – науковий ступінь кандидата технічних наук; 2 – звання професора, 8 – звання доцента.
</p>
<img class="thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/pictures/DSC_0105.jpg" alt="">
<p>
	На кафедрі кібербезпеки та інформаційних технологій ведеться активна співпраця у галузі освіти та наукових досліджень із провідними ІТ-компаніями. Викладачі кафедри та студенти, що навчаються за напрямом кафедри, активно використовують ресурси хмарних обчислень та взастосовують технології сучасних мереж й засоби кібербезпеки разом із провідними фахівцями світу. Наші партнери:  
</p>

<div class="owl-carousel owl-theme " >       
    <div class="item"><a target="_blank" href="https://cipher.com.ua/uk"><img  style="height: 100px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/cipher.png" alt=""></a></div>
    <div class="item"><a target="_blank" href="https://www.globallogic.com/ua/"><img  style="height: 100px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/globallogic.jpg" alt=""></a></div>
    <div class="item"><a target="_blank" href="https://aws.amazon.com/education/awseducate/"><img  style="height: 100px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/educate-logo.png" alt=""></a></div>
    <div class="item"><a target="_blank" href="https://www.netacad.com/"><img  style="height: 100px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/cisco.jpg" alt=""></a></div>
	</div>

<p> 
	Кафедра працює над науковими дослідженнями за напрямами: управління обчислювальними ресурсами розподілених систем, структурне та об’єктно-орієнтоване моделювання інформаційних систем, сучасні технології розроблення програмних продуктів, методи безпеки та захисту інформації в інформаційних системах.
<div class="thumbnail">
<img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/DSC_0033.jpg">
</div>
Основні навчальні дисципліни, які викладаються на кафедрі: основи криптографічного захисту, менеджмент інформаційної безпеки, безпека в інформаційно-комунікаційних системах, захист систем електронної комерції та мультисервісних систем, корпоративні мережі та системи доступу, безпека банківських систем, адміністрування unix-подібних систем, веб-технології та веб-дизайн.
</p>
<div class="thumbnail">
<img src="<?php echo get_template_directory_uri(); ?>/assets/pictures/DSC_0205.jpg"> 
</div>
<p>
Більш детальну інформацію щодо організаційної структури нашого університету ви зможети отримати на офіційному сайті <a href="https://www.hneu.edu.ua/">ХНЕУ ім. С. Кузнеця</a>
</p>
							</div>
						</div>
					</div>
					
					
					
						
				</div>		
						
				







				<div class="large-4 medium-4 cell">

<?php get_sidebar(); ?>

				</div>
			</div>
</div>



<?php
get_footer(); ?>
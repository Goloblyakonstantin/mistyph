<?php require_once('php/php.php') ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/css/price_css.css">
    <link rel="stylesheet" href="/css/header_css.css">
    <link rel="stylesheet" href="/css/footer_css.css">
		<meta name="keywords" content="<?php echo $keywords ?>">
		<meta name="description" content="<?php echo $description ?>">
		<link rel="shortcut icon" href="img/ico/ico.ico" type="image/x-icon">
    <title>Цена</title>
  </head>
  <body onload="setInterval(function_header_menu_popup,20), setTimeout(go_preload,10);">
    <div id="preloader" class="preloader">
      <h1>Загружаем</h1>
    </div>
    <?php require_once('header.php') ?>
    <main>
      <section class="main_section_background">

      </section>
      <section class="main_section_0">
        <div class="main_section_0-div_0">
          <img src="/img/price/price_img_0.jpg" alt="">
          <span>
            <h2>2000P</h2>
            <h1>S</h1>
            <ul>
              <li>﻿Предварительная консультация (идея, образ, студия)</li>
              <li>1 час съемки</li>
              <li>1-2 образа</li>
              <li>10 фото в ретуши и все удачные кадры в цветокоррекции</li>
              <li>Срок готовности фото 1-2 недели</li>
              <li>Студия и визажист оплачиваются отдельно</li>
              <li>Запись по предоплате 50%</li>
            </ul>
          </span>
        </div>
        <div class="main_section_0-div_0">
          <img src="/img/price/price_img_1.jpg" alt="">
          <span>
            <h2>2500P</h2>
            <h1>M</h1>
            <ul>
              <li>﻿Предварительная консультация (идея, образ, студия)</li>
              <li>1 час съемки</li>
              <li>2-3 образа</li>
              <li>15 фото в ретуши и все удачные кадры в цветокоррекции</li>
              <li>Срок готовности фото 1-2 недели</li>
              <li>Студия и визажист оплачиваются отдельно</li>
              <li>Запись по предоплате 50%</li>
            </ul>
          </span>
        </div><div class="main_section_0-div_0">
          <img src="/img/price/price_img_2.png" alt="">
          <span>
            <h2>3000P</h2>
            <h1>L</h1>
            <ul>
              <li>﻿Предварительная консультация (идея, образ, студия)</li>
              <li>2 час съемки</li>
              <li>3-4 образа</li>
              <li>20 фото в ретуши и все удачные кадры в цветокоррекции</li>
              <li>Срок готовности фото 1-2 недели</li>
              <li>Студия и визажист оплачиваются отдельно</li>
              <li>Запись по предоплате 50%</li>
            </ul>
          </span>
        </div>
      </section>
      <section class="main_section_1">
        <?php
          for($i=0;$i<count($price_price_array_text_1);$i++)
        	{
        		echo'<div class="main_section_1-div_0"><h1>'.$price_price_array_text_1[$i][0].'</h1><p>'.$price_price_array_text_1[$i][1].'</p></div>';
        	}
        ?>
      </section>
      <section class="main_section_2">
        <div class="main_section_2-div_0">
        	<div class="main_section_2-div_0-slider_button_left"><img src="/img\price\studios\studios_button_left_img.png" onclick="price_studios_slider_scroll(-1)"></div>
        	<div class="main_section_2-div_0-slider_button_right"><img src="/img\price\studios\studios_button_right_img.png" onclick="price_studios_slider_scroll(1)"></div>
        	<div class="main_section_2-div_0-slider_polosa" id="main_section_2-slider_polosa">
        	<?php
        		for($i=0;$i<count($price_price_array_studios);$i++)
        		{
        			echo'<div class="main_section_2-div_0-slider_polosa-div_0" style="background-image: url('.$price_price_array_studios[$i][0].')"><span class="main_section_2-div_0-slider_polosa-span_0"><h2>'.$price_price_array_studios[$i][1].'</h2><h1>'.$price_price_array_studios[$i][2].'</h1></span></div>';
        		}
        	?>
        	</div>
        </div>
      </section>
    </main>
    <?php require_once('footer.php') ?>
    <script src="js/javascript_header_menu.js"></script>
		<script src="js/javascript_price_studios_slider.js"></script>
    <script src="js/javascript_preloader.js"></script>
  </body>
</html>

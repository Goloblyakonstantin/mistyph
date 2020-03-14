<?php require_once('php/php.php') ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/css/contacts_css.css">
    <link rel="stylesheet" href="/css/header_css.css">
    <link rel="stylesheet" href="/css/footer_css.css">
		<meta name="keywords" content="<?php echo $keywords ?>">
		<meta name="description" content="<?php echo $description ?>">
		<link rel="shortcut icon" href="img/ico/ico.ico" type="image/x-icon">
    <title>Контакты</title>
  </head>
  <body onload="setInterval(function_header_menu_popup,20), setTimeout(go_preload,10);">
    <div id="preloader" class="preloader">
      <h1>Загружаем</h1>
    </div>
    <?php require_once('header.php') ?>
    <main>
      <section class="main_section_0">
        <div class="main_section_0-div_0">
          <?php
        		for($i=0;$i<count($footer_contacts);$i++)
        		{
        			echo '<div class="main_section_0-div_0-in_0"><h1>'.$footer_contacts[$i][0].'</h1></div>
        			<div class="main_section_0-div_0-in_1"><p><a href="'.$footer_contacts[$i][2].'">'.$footer_contacts[$i][1].'</a></p></div>';
        		}
        	?>
        </div>
      </section>
      <section class="main_section_1">
        <img src="img/header/logo.png" alt="">
      </section>
    </main>
    <script src="js/javascript_header_menu.js"></script>
    <script src="js/javascript_preloader.js"></script>
  </body>
</html>
